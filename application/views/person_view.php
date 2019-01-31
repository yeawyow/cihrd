<?php $this->load->view('header') ?> 
    
    <main class="app-content" ng-controller="person">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> ข้อมูลบุคลากร</h1>
         <!-- <p>Start a beautiful journey here</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/person');   ?>">ข้อมูลบุคลากร</a></li>
        </ul>
      </div>
      <div class="row" >
        <div class="col-md-12">
        
          <div class="tile">
            <h3 class="tile-title">Bordered Table</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>cid</th>
                  <th>ชื่อ - สกุล</th>
                  <th>เพศ</th>
                  <th>
                     <button class="btn btn-primary" type="button" ng-click="newData()"  data-toggle="modal" data-target="#editModal">
                      <i class="fa fa-plus"></i>เพิ่ม</button>
                  </th>
                </tr>
              </thead>
              <tbody ng-repeat="p in person">
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{p.cid}}</td>
                  <td>{{p.fullname}} </td>
                  <td>{{p.sex_id}} </td>
                  <td>
                   <button class="btn btn-danger" type="button" 
                    data-toggle="modal" data-target="#basicExampleModal" ng-click="deleteData(d.clinic_name,d.clinic_id)">
                    <i class="fa fa-times"></i>ลบ</button>
                    <button class="btn btn-warning " type="button" 
                    data-toggle="modal" data-target="#editModal" ng-click="edit(d)">
                    <i class="fa fa-fw fa-lg fa-pencil-square-o"></i>แก้ไข</button>
                  </td>
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>


<!-- Modal -->
<div class="modal fade " id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document" ng-contr>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูล</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><h3>ต้องการลบ</h3></p>
        <p><h4>แผนก : {{delRow}}</h4></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" ng-click="confirm('1')">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>
 
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">แก้ไข</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
    <div class="board">
        <!-- Circular Tab Area -->
        <div class="board-inner" id="status-buttons">
            <ul class="nav nav-tabs" id="myTab">
                <div class="liner"></div>
                
                <!-- circular user icon -->
                <li>
                    <a ui-sref-active="active" ui-sref=".personal" data-toggle="tab" title="personal">
                        <span class="round-tabs one">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    </a>
                </li>

                <!-- circular tasks icon -->
                <li>
                    <a ui-sref-active="active" ui-sref=".work" data-toggle="tab" title="work">
                        <span class="round-tabs two">
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span> 
                    </a>
                </li>

                <!-- circular home icon -->
                <li>
                    <a ui-sref-active="active" ui-sref=".address" data-toggle="tab" title="address">
                        <span class="round-tabs three">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                    </a>
                </li>

                <!-- circular ok icon -->
                <li>
                    <a ui-sref-active="active" ui-sref=".result" data-toggle="tab" title="result">
                        <span class="round-tabs four">
                            <i class="glyphicon glyphicon-ok"></i>
                        </span>
                    </a>
                </li>
            
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- End Circular Tab Area -->

        <!-- Content Area -->
        <div class="tab-content">
            <!-- Nested view  -->
            <div ui-view></div>
        </div>
        <!-- End Content Area -->
    </div>

    <!-- For Debugging: show our formData as it is being typed -->
    <pre>{{ vm.formData | json }}</pre>
</div>
      </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" ng-click="saveEdit()">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>


    </main>
<?php $this->load->view('footer') ?> 