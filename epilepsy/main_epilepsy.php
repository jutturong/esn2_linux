<style type="text/css">
        #fm_epilepsy{
            margin:0;
            padding:10px 30px;
        }
        .ftitle{
            font-size:14px;
            font-weight:bold;
            padding:5px 0;
            margin-bottom:10px;
            border-bottom:1px solid #ccc;
        }
        .fitem{
            margin-bottom:5px;
        }
        .fitem label{
            display:inline-block;
            width:80px;
        }
        .fitem input{
            width:160px;
        }
</style>

<script type="text/javascript">
      function add_epilepsy()
      {
            $('#add_epilepsy').dialog('open').dialog('setTitle','เพิ่มข้อมูล Epilepsy Clinic').dialog(modal,true);
            //$('#add_epilepsy').dialog('open');
                  
           // $('#add_epilepsy').window('open');
                
                
                
                 
                
            $('#fm_epilepsy').form('clear');
           // url = 'save_user.php';
      }
</script>
    

    
    
    <table id="dg" title="Epilepsy Clinic" class="easyui-datagrid" style="width:700px;height:250px"
            url="<?=base_url()?>index.php/epilepsy/value_monitoring/"
            toolbar="#toolbar1" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <!--
                <th field="productname" >Productname</th>
                <th field="unitcost" >unitcost</th>
                <th field="listprice" >listprice</th>
                <th field="attr1" >attr1</th>
                -->
                 <th field="MonitoringDate" >MonitoringDate</th>
                 <th field="HN" >HN</th>
                 <th field="Value" >Value</th>
                 <th field="Lab" >Lab</th>
                 <th field="Lab_value" >ค่า Lab</th>
                 
                
            </tr>
        </thead>
    </table>


<div id="toolbar1">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="add_epilepsy()" >เพิ่มรายการเริ่มต้น</a>
</div>

<!--
64=Frequency (time/month) :
66=Clinical Response
67=Severity of Attack
101=Duration of Attack
-->

<div id="add_epilepsy" class="easyui-dialog" style="width:500px;height:500px;padding:10px 20px"
            closed="true" buttons="#dlg-buttons" data-options=" modal:true ">
        <!-- <div class="ftitle">เพิ่มข้อมูล Epilepsy Clinic</div> -->
        <form id="fm_epilepsy" method="post" novalidate>
            <table cellpadding="5">
            <tr>
                <td>
                HN :
                </td>
                <td>
                    <input class="easyui-textbox" style="width:100px" id="HN_epilepsy" name="HN_epilepsy" data-options="iconCls:'icon-man',readonly:true " required="require">
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <?php echo nbs(30); ?>
                     <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-large-chart',size:'large',iconAlign:'top'">View Frequency of Seizure Chart</a>
                </td>
            </tr>
            
            <tr>
                <td>
                    
                </td>
                    <td>
                    This Visit
                    <?php  echo nbs(15);  ?>
                    Last Visit
                    </td>
            </tr>
            
            <tr>
                <td>
                Frequency (time/month) (64) :
                </td>
                <td>
                    <input   class="easyui-numberspinner" style="width:90px" id="frequency" name="frequency" data-options="min:1,max:100,editable:false">
                </td>    
            </tr>
            
            
            <tr>
                <td>
                    Clinical Response (66) :
                </td>
                <td>
                    <input   class="easyui-textbox" id="clinic_response" name="clinic_response" style="width:200px;height:40px" data-options="readonly:true,iconCls:'icon-print',size:'large', ">
                </td>
            </tr>
            
            <tr>
                <td>Duration of Attack (101) :</td>
                <td>
                    <select class="easyui-combobox" name="Duration_of_Attack" id="Duration_of_Attack" style="width:200px;">
                                   <option value="1">Same</option>
                                   <option value="2">Increase</option>
                                   <option value="3">Decrease</option>
                        </select>
                </td>
            </tr>
            
            <tr>
                <td>Severity of Attack (67) :</td>
                <td>
                    <select class="easyui-combobox" name="Severity_of_Attack" id="Severity_of_Attack" style="width:200px;">
                                   <option value="1">Same</option>
                                   <option value="2">Increase</option>
                                   <option value="3">Decrease</option>
                        </select>
                </td>
            </tr>
            
            <tr>
                <td>วัน/เดือน/ปี ที่บันทึกข้อมูล (MonitoringDate) :</td>
                <td><input class="easyui-datebox" id="MonitoringDate" name="MonitoringDate" required="required" ></input></td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-save'" style="width:100px">เพิ่มข้อมูล</a>
                    <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'" style="width:100px" onclick="$('#add_epilepsy').window('close');">ปิดหน้าต่าง</a>
                </td>
            </tr>
            </table>
            
            <!--
            <div class="fitem">
                <label>Last Name:</label>
                <input name="lastname" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Phone:</label>
                <input name="phone" class="easyui-textbox">
            </div>
            <div class="fitem">
                <label>Email:</label>
                <input name="email" class="easyui-textbox" validType="email">
            </div>
             -->
             
        </form>
    </div>


<!--  

<div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">เพิ่มรายการ</a>
        
       
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
        
    </div>
 -->
<!--
    <div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
            closed="true" buttons="#dlg-buttons">
        <div class="ftitle">User Information</div>
        <form id="fm" method="post" novalidate>
            <div class="fitem">
                <label>First Name:</label>
                <input name="firstname" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Last Name:</label>
                <input name="lastname" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Phone:</label>
                <input name="phone" class="easyui-textbox">
            </div>
            <div class="fitem">
                <label>Email:</label>
                <input name="email" class="easyui-textbox" validType="email">
            </div>
        </form>
    </div>
-->

    <!--
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>
    -->