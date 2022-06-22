<template>
  <div>
    <CRow>
      <CCol md="12">
        <CCard>
          <CCardHeader>
            Events
          </CCardHeader>
          <CCardBody>
            <CRow>
              <CCol sm="12" lg="6">
                <CRow>
                  <CCol sm="6">
                    <CCallout color="info">
                      <small class="text-muted">Total Items</small><br>
                      <strong class="h4">{{ events.length }}</strong>
                    </CCallout>
                  </CCol>
                  <CCol sm="6">
                    <CCallout color="danger">
                      <small class="text-muted">Total Value</small><br>
                      <strong class="h4">100</strong>
                    </CCallout>
                  </CCol>
                </CRow>
              </CCol>
              <CCol sm="12" lg="6">
                <CRow>
                  <CCol sm="6">
                    <CCallout color="warning">
                      <small class="text-muted">Total Sold (6 months)</small><br>
                      <strong class="h4">0</strong>
                    </CCallout>
                  </CCol>
                  <CCol sm="6">
                    <CCallout color="success">
                      <small class="text-muted">Total Sold (12 months)</small><br>
                      <strong class="h4">0</strong>
                    </CCallout>
                  </CCol>
                </CRow>

              </CCol>
            </CRow>
            <br/>
            <CDataTable
                class="mb-0 table-outline"
                hover
                @row-clicked="ProductDetailsClickHandler"
                :items="events"
                :fields="eventsFields"
                head-color="light"
                no-sorting
            >
              <td slot="avatar" class="text-center" slot-scope="{item}">
                <div class="c-avatar">
                  <img :src="item.avatar.url" class="c-avatar-img" alt="">
                  <span
                      class="c-avatar-status"
                      :class="`bg-${item.avatar.status || 'secondary'}`"
                  ></span>
                </div>
              </td>
              <td slot="user" slot-scope="{item}">
                <div>{{ item.user.name }}</div>
                <div class="small text-muted">
                  <span>
                    <template v-if="item.user.new">New</template>
                    <template v-else>Recurring</template>
                  </span> | Registered: {{ item.user.registered }}
                </div>
              </td>
              <td
                  slot="country"
                  slot-scope="{item}"
                  class="text-center"
              >
                <CIcon
                    :name="item.country.flag"
                    height="25"
                />
              </td>
              <td slot="usage" slot-scope="{item}">
                <div class="clearfix">
                  <div class="float-left">
                    <strong>{{ item.usage.value }}%</strong>
                  </div>
                  <div class="float-right">
                    <small class="text-muted">{{ item.usage.period }}</small>
                  </div>
                </div>
                <CProgress
                    class="progress-xs"
                    v-model="item.usage.value"
                    :color="color(item.usage.value)"
                />
              </td>
              <td
                  slot="payment"
                  slot-scope="{item}"
                  class="text-center"
              >
                <CIcon
                    :name="item.payment.icon"
                    height="25"
                />
              </td>
              <td slot="activity" slot-scope="{item}">
                <div class="small text-muted">Last login</div>
                <strong>{{ item.activity }}</strong>
              </td>
            </CDataTable>

          </CCardBody>
        </CCard>
      </CCol>

      <CModal
          :show.sync="showItemListModal"
          :centered="true"
          title="Products"
      >
        <div><span class="h5" v-for="details in product_details.products"> {{ details.name }}</span></div>
        <CButton @click="showItemListModal = false" color="primary">Cancel</CButton>
        <CButton @click="showProducts= !showProducts " color="primary">Add Products</CButton>
        <div class="header">Debounced search:</div>
        <div class="content">
          <div class="flex-row">
            <label class="label" for="search">Search:</label>
            <input v-model="searchQuery" class="input" type="text">
          </div>

          <p v-if="isSearching">Searching…</p>

          <ul v-else class="list">
            <li v-for="result in productSearch" :key="result" class="list-item">{{ result.name }}</li>
          </ul>
        </div>


      </CModal>

    </CRow>
    <CButton @click="showUser(10)" color="primary">New product</CButton>
    <CButton @click="showNewEvent(10)" color="primary">New Event</CButton>

  </div>

</template>


<script>

import axios from "axios";

export default {
  name: 'Events',
  components: {},
  data() {
    return {
      deleteFolderModal: false,
      showItemListModal: false,
      showProducts: false,
      message: null,
      typing: null,
      debounce: null,
      invoice: [],
      search: '',
      searchQuery: "",
      isSearching: false,
      debounceTimeout: null,
      product_details: [],
      selected: 'Month',
      tableItems: [],
      productSearch: [],
      tableFields: [
        {key: 'type', label: 'Type', _classes: 'text-center'},
        {key: 'name'},
        {key: 'place_of_purchase', _classes: 'text-center'},
        {key: 'price_purchased'},
        {key: 'created_at', label: 'Purchase Date', _classes: 'text-center'},
      ],
      events: [],
      eventsFields: [
        {key: 'venue_name', label: 'Name', _classes: 'text-center'},
        {key: 'venue_duration'},
        {key: 'venue_date', _classes: 'text-center'},
      ]
    }

  },
  watch: {
    searchQuery: function (query) {
      if (this.debounceTimeout) {
        clearTimeout(this.debounceTimeout);
      }

      this.isSearching = true;

      this.debounceTimeout = setTimeout(() => {
        axios.get(this.$apiAdress + '/api/products/search/' + query + '?token=' + localStorage.getItem("api_token"))
            .then(response => (this.productSearch = response.data))

        this.isSearching = false;
      }, 1000);
    }
  },
  methods: {
    run() {
      this.deleteFolderModal = true;

    },

    showUser(id) {
      const userLink = this.userLink(id);
      this.$router.push({path: userLink});
    },
    showNewEvent(id) {
      // const userLink = this.userLink( id );
      this.$router.push({path: `events/new`});
    },
    userLink(id) {
      return `products/new`
    },
    run2() {
      this.showItemListModal = true;
    },
    rowClickHandler(item, index, column_name, event) {
      axios.get(this.$apiAdress + '/api/events/' + item.invoices_id + '?token=' + localStorage.getItem("api_token"))
          .then(response => (this.invoice = response.data[0])).then(this.run())
    },
    ProductDetailsClickHandler(item, index, column_name, event) {
      axios.get(this.$apiAdress + '/api/events/' + item.events_id + '/products?token=' + localStorage.getItem("api_token"))
          .then(response => (this.product_details = response.data[0])).then(this.run2())
    },
    getEyeTotal() {
      console.log(this.tableItems);
      if (this.tableItems.length == 0) return;
      var equaToOne = this.tableItems.filter(function (item) {
        return item.type == 'eyes';
      })
      return equaToOne.length;
    },
    getYarnTotal() {
      if (this.tableItems.length == 0) return;

      var equaToOne = this.tableItems.filter(function (item) {
        return item.type == 'yarn';
      })
      return equaToOne.length;
    },

    color(value) {
      let $color
      if (value <= 25) {
        $color = 'info'
      } else if (value > 25 && value <= 50) {
        $color = 'success'
      } else if (value > 50 && value <= 75) {
        $color = 'warning'
      } else if (value > 75 && value <= 100) {
        $color = 'danger'
      }
      return $color
    },
    addNewRawMat() {
      let self = this
      axios.post(this.$apiAdress + '/api/?token=' + localStorage.getItem("api_token"),
          {
            name: 'selectModel',
            raw_mats: self.tableNameInDatabase,
          }
      )
          .then(function (response) {
            if (response.data.status == 'lackcolumns') {
              self.message = 'Table not detected, or there is no columns in table'
              self.showAlert()
              self.tableNameInDatabase = ''
              self.receiveFormFields = []

            } else {
              self.marker = false
              self.formFields = response.data.columns
              self.options = response.data.options
              self.roles = response.data.roles
              self.rolesArray = [];
              for (let i = 0; i < self.roles.length; i++) {
                self.rolesArray[self.roles[i]] = true;
              }
            }
          }).catch(function (error) {
        console.log(error);
        self.$router.push({path: 'login'});
      });
    },
  },
  mounted() {
    // let self = this;
    axios.get(this.$apiAdress + '/api/products?token=' + localStorage.getItem("api_token"))
        .then(response => (this.tableItems = response.data))

    axios.get(this.$apiAdress + '/api/events?token=' + localStorage.getItem("api_token"))
        .then(response => (this.events = response.data))
  }
}
</script>
