<template>
  <CRow>
    <CCol col="12" lg="6">
      <CCard no-header>
        <CCardBody>
          <CForm>
            <template slot="header">
              Edit User id:  {{ $route.params.id }}
            </template>
            <CAlert
                :show.sync="dismissCountDown"
                color="primary"
                fade
            >
            </CAlert>
            <CInput type="text" label="Name" placeholder="Name" v-model="name"></CInput>
            <CInput type="text" label="Hook Size" placeholder="Hook Size" v-model="hook"></CInput>



            Select Materials used

            <input type="text" v-model="search" placeholder="Search title.."/>
            <div v-for="mat in filteredList" >{{mat.name}}</div>
<!--
            <CCard v-for="mat in filteredList">
              <CCardHeader>
           <strong> {{mat.name}}</strong>
                <div class="card-header-actions">
<img width="100" src="https://i.etsystatic.com/20198942/r/il/c92897/3893257788/il_794xN.3893257788_d6l6.jpg">
                    <small class="text-muted">{{mat.name}}</small>
                </div>
              </CCardHeader>
              <CCardBody>
              </CCardBody>
            </CCard>
-->

            <CButton color="primary" @click="update()">Save</CButton>
            <CButton color="primary" @click="goBack">Back</CButton>
          </CForm>
        </CCardBody>
      </CCard>
    </CCol>
  </CRow>
</template>


<script>
import axios from 'axios'
export default {
  name: 'RawMat',
  data: () => {
    return {
      items: [],
      search: '',
      fields: [
        {key: 'key'},
        {key: 'value'},
      ],
      options: ['Option 1', 'Option 2', 'Option 3'],

    }

  },
  methods: {
    getUserData (id) {
      const user = productsData.find((user, index) => index + 1 == id)
      const userDetails = user ? Object.entries(user) : [['id', 'Not found']]
      return userDetails.map(([key, value]) => { return { key, value } })
    },
    goBack() {
      this.$router.go(-1)
    }
  },
  mounted: function(){
    let self = this;
    axios.get(  this.$apiAdress + '/api/raw' +'?token=' + localStorage.getItem("api_token"))
    .then(function (response) {
      const items = response.data;
      self.options =response.data;// items.map(([key, value]) => {return {key: key, value: value}});
    }).catch(function (error) {
      console.log(error);
      self.$router.push({ path: '/login' });
    });
  },
  computed: {
    filteredList() {
      console.log(this.search);

      if(this.options ===undefined || this.search==='' || this.search===undefined)return this.options
      return this.options.filter(post => {
        console.log(post.name);
        return post.name.toLowerCase().includes(this.search.toLowerCase())
      })
    }
  }
}
</script>
