<?php $this->load->view('header') ?> 
    
    <main class="app-content" ng-controller="subdepartment">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> ข้อมูลฝ่าย/งาน</h1>
         <!-- <p>Start a beautiful journey here</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/department');   ?>">ข้อมูลฝ่าย/งาน</a></li>
        </ul>
      </div>
      <div class="row" >
        <div class="col-md-12">
        
          <div class="tile">
            <h3 class="tile-title"></h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>กลุ่มฝ่าย/งาน</th>
                  <th>หัวหน้าฝ่าย/งาน</th>
				  <th>กลุ่มงาน</th>
                  <th>
                     <button class="btn btn-primary" type="button" ng-click="newData()"  data-toggle="modal" data-target="#editModal">
                      <i class="fa fa-plus"></i>เพิ่ม</button>
                  </th>
                </tr>
              </thead>
              <tbody ng-repeat="ds in subdepartment">
                <tr>
               
				<td>{{$index+1}}</td>
				<td>{{ds.department_sub_name}}</td>
				<td>{{ds.department_head}}</td>
				<td>{{ds.department_name}}</td>
				<td> <button class="btn btn-danger" type="button" 
                    data-toggle="modal" data-target="#basicExampleModal" ng-click="deleteData(d.clinic_name,d.clinic_id)">
                    <i class="fa fa-times"></i>ลบ</button>
                    <button class="btn btn-warning " type="button" 
                    data-toggle="modal" data-target="#editModal" ng-click="edit(d)">
                    <i class="fa fa-fw fa-lg fa-pencil-square-o"></i>แก้ไข</button></td>
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
        
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Vertical Form</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Address</label>
                  <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Gender</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">Male
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">Female
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Identity Proof</label>
                  <input class="form-control" type="file">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">I accept the terms and conditions
                    </label>
                  </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
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