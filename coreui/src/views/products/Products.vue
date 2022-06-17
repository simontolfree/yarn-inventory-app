<template>
  <div>

    <WidgetsBrand/>
    <CRow>
      <CCol md="12">
        <CCard>
          <CCardHeader>
            Products
          </CCardHeader>
          <CCardBody>
            <CRow>
              <CCol sm="12" lg="6">
                <CRow>
                  <CCol sm="6">
                    <CCallout color="info">
                      <small class="text-muted">Total Items</small><br>
                      <strong class="h4">{{productItems.length}}</strong>
                    </CCallout>
                  </CCol>
                  <CCol sm="6">
                    <CCallout color="danger">
                      <small class="text-muted">Total Value</small><br>
                      <strong class="h4">100</strong>
                    </CCallout>
                  </CCol>
                </CRow>
                <!--                <hr class="mt-0">
                                <div class="progress-group mb-4">
                                  <div class="progress-group-prepend">
                                    <span class="progress-group-text">
                                      Monday
                                    </span>
                                  </div>
                                  <div class="progress-group-bars">
                                    <CProgress
                                      class="progress-xs"
                                      color="info"
                                      :value="34"
                                    />
                                    <CProgress
                                      class="progress-xs"
                                      color="danger"
                                      :value="78"
                                    />
                                  </div>
                                </div>
                                <div class="progress-group mb-4">
                                  <div class="progress-group-prepend">
                                    <span class="progress-group-text">
                                      Tuesday
                                    </span>
                                  </div>
                                  <div class="progress-group-bars">
                                    <CProgress
                                      class="progress-xs"
                                      :value="56"
                                      color="info"
                                    />
                                    <CProgress
                                      class="progress-xs"
                                      :value="94"
                                      color="danger"
                                    />
                                  </div>
                                </div>
                                <div class="progress-group mb-4">
                                  <div class="progress-group-prepend">
                                    <span class="progress-group-text">
                                      Wednesday
                                    </span>
                                  </div>
                                  <div class="progress-group-bars">
                                    <CProgress
                                      class="progress-xs"
                                      :value="12"
                                      color="info"
                                    />
                                    <CProgress
                                      class="progress-xs"
                                      :value="67"
                                      color="danger"
                                    />
                                  </div>
                                </div>
                                <div class="progress-group mb-4">
                                  <div class="progress-group-prepend">
                                    <span class="progress-group-text">
                                      Thursday
                                    </span>
                                  </div>
                                  <div class="progress-group-bars">
                                    <CProgress
                                      class="progress-xs"
                                      :value="43"
                                      color="info"
                                    />
                                    <CProgress
                                      class="progress-xs"
                                      :value="91"
                                      color="danger"
                                    />
                                  </div>
                                </div>
                                <div class="progress-group mb-4">
                                  <div class="progress-group-prepend">
                                    <span class="progress-group-text">
                                      Friday
                                    </span>
                                  </div>
                                  <div class="progress-group-bars">
                                    <CProgress
                                      class="progress-xs"
                                      :value="22"
                                      color="info"
                                    />
                                    <CProgress
                                      class="progress-xs"
                                      :value="73"
                                      color="danger"
                                    />
                                  </div>
                                </div>
                                <div class="progress-group mb-4">
                                  <div class="progress-group-prepend">
                                    <span class="progress-group-text">
                                      Saturday
                                    </span>
                                  </div>
                                  <div class="progress-group-bars">
                                    <CProgress
                                      class="progress-xs"
                                      :value="53"
                                      color="info"
                                    />
                                    <CProgress
                                      class="progress-xs"
                                      :value="82"
                                      color="danger"
                                    />
                                  </div>
                                </div>
                                <div class="progress-group mb-4">
                                  <div class="progress-group-prepend">
                                    <span class="progress-group-text">
                                      Sunday
                                    </span>
                                  </div>
                                  <div class="progress-group-bars">
                                    <CProgress
                                      class="progress-xs"
                                      :value="9"
                                      color="info"
                                    />
                                    <CProgress
                                      class="progress-xs"
                                      :value="69"
                                      color="danger"
                                    />
                                  </div>
                                </div>
                                <div class="legend text-center">
                                  <small>
                                    <sup><CBadge shape="pill" color="info">&nbsp;</CBadge></sup>
                                    New clients
                                    &nbsp;&nbsp;
                                    <sup><CBadge shape="pill" color="danger">&nbsp;</CBadge></sup>
                                    Recurring clients
                                  </small>
                                </div>-->
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
                <!--                <hr class="mt-0">
                                <ul class="horizontal-bars type-2">
                                  <div class="progress-group">
                                    <div class="progress-group-header">
                                      <CIcon name="cil-user" class="progress-group-icon"/>
                                      <span class="title">Male</span>
                                      <span class="ml-auto font-weight-bold">43%</span>
                                    </div>
                                    <div class="progress-group-bars">
                                      <CProgress
                                        class="progress-xs"
                                        :value="43"
                                        color="warning"
                                      />
                                    </div>
                                  </div>
                                  <div class="progress-group mb-5">
                                    <div class="progress-group-header">
                                      <CIcon name="cil-user-female" class="progress-group-icon"/>
                                      <span class="title">Female</span>
                                      <span class="ml-auto font-weight-bold">37%</span>
                                    </div>
                                    <div class="progress-group-bars">
                                      <CProgress
                                        class="progress-xs"
                                        :value="37"
                                        color="warning"
                                      />
                                    </div>
                                  </div>
                                  <div class="progress-group">
                                    <div class="progress-group-header">
                                      <CIcon name="cil-globe-alt" class="progress-group-icon"/>
                                      <span class="title">Organic Search</span>
                                      <span class="ml-auto font-weight-bold">
                                        191,235 <span class="text-muted small">(56%)</span>
                                      </span>
                                    </div>
                                    <div class="progress-group-bars">
                                      <CProgress
                                        class="progress-xs"
                                        :value="56"
                                        color="success"
                                      />
                                    </div>
                                  </div>
                                  <div class="progress-group">
                                    <div class="progress-group-header">
                                      <CIcon
                                        name="cib-facebook"
                                        height="17"
                                        class="progress-group-icon"
                                      />
                                      <span class="title">Facebook</span>
                                      <span class="ml-auto font-weight-bold">
                                        51,223 <span class="text-muted small">(15%)</span>
                                      </span>
                                    </div>
                                    <div class="progress-group-bars">
                                      <CProgress
                                        class="progress-xs"
                                        :value="15"
                                        color="success"
                                      />
                                    </div>
                                  </div>
                                  <div class="progress-group">
                                    <div class="progress-group-header">
                                      <CIcon
                                        name="cib-twitter"
                                        height="17"
                                        class="progress-group-icon"
                                      />
                                      <span class="title">Twitter</span>
                                      <span class="ml-auto font-weight-bold">
                                        37,564 <span class="text-muted small">(11%)</span>
                                      </span>
                                    </div>
                                    <div class="progress-group-bars">
                                      <CProgress
                                        class="progress-xs"
                                        :value="11"
                                        color="success"
                                      />
                                    </div>
                                  </div>
                                  <div class="progress-group">
                                    <div class="progress-group-header">
                                      <CIcon
                                        name="cib-linkedin"
                                        height="17"
                                        class="progress-group-icon"
                                      />
                                      <span class="title">LinkedIn</span>
                                      <span class="ml-auto font-weight-bold">
                                        27,319 <span class="text-muted small">&nbsp;(8%)</span>
                                      </span>
                                    </div>
                                    <div class="progress-group-bars">
                                      <CProgress
                                        class="progress-xs"
                                        :value="8"
                                        color="success"
                                      />
                                    </div>
                                  </div>
                                  <div class="divider text-center">
                                    <CButton color="link" size="sm" class="text-muted">
                                      <CIcon name="cil-options"/>
                                    </CButton>
                                  </div>
                                </ul>-->
              </CCol>
            </CRow>
            <br/>



            <CDataTable
                class="mb-0 table-outline"
                hover
                @row-clicked="ProductDetailsClickHandler"
                :items="productItems"
                :fields="productFields"
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
                <div>{{item.user.name}}</div>
                <div class="small text-muted">
                  <span>
                    <template v-if="item.user.new">New</template>
                    <template v-else>Recurring</template>
                  </span> | Registered: {{item.user.registered}}
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
                    <strong>{{item.usage.value}}%</strong>
                  </div>
                  <div class="float-right">
                    <small class="text-muted">{{item.usage.period}}</small>
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
                <strong>{{item.activity}}</strong>
              </td>
            </CDataTable>






          </CCardBody>
        </CCard>
      </CCol>

      <!--      <CModal
                :show.sync="showItemListModal"
                :centered="true"
                title="Product"
            >
              <div><span class="h5"> {{product_details.name}}</span>
              </div>
              <br>
              <div class="h5">Consists of </div>
              <CTabs variant="tabs" vertical  v-if="product_details !== null && product_details.mat_list !== undefined" >

                <CTab :title=details.raw_material.name  v-for="details in product_details.mat_list">
                  Amount Used: {{ product_details.mat_list.weight }} <br>
                  Typeeee: {{ details.raw_material.type }}
                </CTab>
              </CTabs>
              <template #footer>
                <CButton @click="showItemListModal = false" color="primary">Cancel</CButton>
              </template>
            </CModal>-->
      <!--      <CModal
                :show.sync="deleteFolderModal"
                :centered="true"
                title="Invoice"
            >
              <div><span class="h5"> {{invoice.place_of_purchase}}</span>
              </div>



              <br>
              <div class="h5">Contents:</div>
              <CTabs variant="tabs" vertical >
                <CTab :title=product.name v-for="product in invoice.raw_materials">
                  Weight: {{ product.weight }} <br>
                  Type: {{ product.type }}
                </CTab>
              </CTabs>
              <template #footer>
                <CButton @click="deleteFolderModal = false" color="primary">Cancel</CButton>
              </template>
            </CModal>-->
    </CRow>
    <CButton @click="showUser(10)" color="primary">New product</CButton>
    <CButton @click="showNewEvent(10)" color="primary">New Event</CButton>

  </div>

</template>


<script>

import axios from "axios";

export default {
  name: 'Product',
  components: {

  },
  data () {
    return {
      deleteFolderModal:  false,
      showItemListModal:  false,
      invoice:[],
      product_details:[],
      selected: 'Month',
      tableItems: [],
      tableFields: [
        { key: 'type', label: 'Type', _classes: 'text-center' },
        { key: 'name' },
        { key: 'place_of_purchase', _classes: 'text-center' },
        { key: 'price_purchased' },
        { key: 'created_at', label: 'Purchase Date', _classes: 'text-center' },
      ],
      productItems: [],
      productFields: [
        { key: 'name', label: 'Name', _classes: 'text-center' },
        { key: 'cost_to_make' },
        { key: 'total_cost', _classes: 'text-center' },
      ]
    }
  },
  methods: {
    run(){
      this.deleteFolderModal=true;

    },
    showUser ( id ) {
      const userLink = this.userLink( id );
      this.$router.push({path: userLink});
    },
    showNewEvent ( id ) {
     // const userLink = this.userLink( id );
      this.$router.push({path: `events/new`});
    },
    userLink (id) {
      return `products/new`
    },
    run2(){
      this.showItemListModal=true;
    },
    rowClickHandler (item, index, column_name, event) {
      axios.get( this.$apiAdress + '/api/invoice/'+item.invoices_id +'?token=' + localStorage.getItem("api_token") )
          .then(response => (this.invoice = response.data[0])).then(this.run())
    },
    ProductDetailsClickHandler (item, index, column_name, event) {
      axios.get( this.$apiAdress + '/api/products/'+item.products_id +'?token=' + localStorage.getItem("api_token") )
          .then(response => (this.product_details = response.data[0])).then(this.run2())
    },
    getEyeTotal(){
      console.log(this.tableItems);
      if(this.tableItems.length==0)return;
      var equaToOne = this.tableItems.filter(function (item) {
        return item.type == 'eyes';
      })
      return equaToOne.length;
    },
    getYarnTotal(){
      if(this.tableItems.length==0)return;

      var equaToOne = this.tableItems.filter(function (item) {
        return item.type == 'yarn';
      })
      return equaToOne.length;
    },

    color (value) {
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
    addNewRawMat(){
      let self = this
      axios.post(  this.$apiAdress + '/api/products?token=' + localStorage.getItem("api_token"),
          {
            name: 'selectModel',
            raw_mats: self.tableNameInDatabase,
          }
      )
          .then(function (response) {
            if(response.data.status == 'lackcolumns'){
              self.message = 'Table not detected, or there is no columns in table'
              self.showAlert()
              self.tableNameInDatabase = ''
              self.receiveFormFields = []

            }else{
              self.marker = false
              self.formFields = response.data.columns
              self.options = response.data.options
              self.roles = response.data.roles
              self.rolesArray = [];
              for(let i=0; i<self.roles.length; i++){
                self.rolesArray[self.roles[i]] = true;
              }
            }
          }).catch(function (error) {
        console.log(error);
        self.$router.push({ path: 'login' });
      });
    },
  },
  mounted () {
    // let self = this;
    axios.get( this.$apiAdress + '/api/raw?token=' + localStorage.getItem("api_token") )
        .then(response => (this.tableItems = response.data))

    axios.get( this.$apiAdress + '/api/products?token=' + localStorage.getItem("api_token") )
        .then(response => (this.productItems = response.data))
  }
}
</script>
