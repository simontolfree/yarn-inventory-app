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
              ({{dismissCountDown}}) {{ message }}
            </CAlert>
            <CInput type="number" label="Venue Duration" placeholder="0" v-model="venue_duration"></CInput>
            <CInput type="text" label="Venue Name" placeholder="Venue Name" v-model="venue_name"></CInput>
            <CInput type="date" label="Venue Date" placeholder="" v-model="venue_date"></CInput>
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
  name: 'NewEvent',
  props: {
    caption: {
      type: String,
      default: 'User id'
    },
  },
  data: () => {
    return {
      name: '',
      venue_name: '',
      venue_date: '',
      venue_duration: 0,

      showMessage: false,
        message: '',
        dismissSecs: 7,
        dismissCountDown: 0,
        showDismissibleAlert: false
    }
  },
  methods: {
    goBack() {
      this.$router.go(-1)
      // this.$router.replace({path: '/users'})
    },
    update() {
        let self = this;
        axios.post(  this.$apiAdress + '/api/events?token=' + localStorage.getItem("api_token"),
        {
            venue_name: self.venue_name,
          venue_date: self.venue_date,
          venue_duration: self.venue_duration,

        })
        .then(function (response) {
            self.message = 'Successfully updated user.';
            self.showAlert();
        }).catch(function (error) {
            console.log(error);
            self.$router.push({ path: '/login' });
        });
    },
    countDownChanged (dismissCountDown) {
      this.dismissCountDown = dismissCountDown
    },
    showAlert () {
      this.dismissCountDown = this.dismissSecs
    },
  },
  mounted: function(){
    let self = this;
    axios.get(  this.$apiAdress + '/api/users/' + self.$route.params.id + '/edit?token=' + localStorage.getItem("api_token"))
    .then(function (response) {
        self.name = response.data.name;
        self.email = response.data.email;
    }).catch(function (error) {
        console.log(error);
        self.$router.push({ path: '/login' });
    });
  }
}


</script>
