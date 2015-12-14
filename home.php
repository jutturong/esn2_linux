    <!DOCTYPE html>
    <html>
    <head>
        
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?=$title?></title>
        
       
       <?php $this->load->view("import_jui")?> 
        
        <!--   for  report PDF -->
        <?php $this->load->view("js_reportPDF")?> 
        
        
        <!--  js for search HN -->
        <?php  $this->load->view("HN"); ?>
        <!--  js for search HN -->
        
        
        <!-- submit form รายการยา -->
        <script type="text/javascript">
        $(function(){
            $('#ff').form({
                success:function(data){
                    $.messager.alert('Info', data, 'info');
                }
            });
        });
        </script>
        <!-- submit form รายการยา -->
        
        <!-- progerss note -->
        <script type="text/javascript">
        $(function(){
            $('#UserName').textbox({
                                                           value:'<?=$sess_username?>',
                                                           readonly:'true',
                                                      
                              }) 
                
            $('#UserSurname').textbox({
                                                           value:'<?=$sess_lastname?>',
                                                           readonly:'true',
                                                      
                              })  
                      
            $('#From').textbox({
                                                           value:'<?=$sess_usercode?>',
                                                           readonly:'true',
                                                      
                              })            
        });
        </script>
        
        <!-- progerss note -->
    </head>
    <body>

       
  <div style="margin:10px 0;"></div>
  <div class="easyui-panel" title="<?=$title?>" style="width:1100px;padding:30px 70px 50px 70px">
            

            
   <!-- Begin Frame--->             
  <div style="padding:20px;background:#fafafa;width:1000px;border:1px solid #ccc">
        
    
      <!--
      <a href="#" class="easyui-linkbutton" iconCls="icon-save">Save</a>    
      <a href="#" class="easyui-linkbutton" iconCls="icon-cancel">Cancel</a>
      <a href="#" class="easyui-linkbutton" iconCls="icon-reload">Refresh</a> 
      -->
      <!--<a href="#" class="easyui-linkbutton">text button</a>-->
      <a href="#" class="easyui-linkbutton" iconCls="icon-print" onclick="$('#win_report').window('open');  ">ออกผลรายงาน (Report)</a>
      <a href="<?=base_url()?>index.php/welcome/index/" class="easyui-linkbutton" iconCls="icon-save">ออกจากระบบ (Logout)</a>
    
    
  
   
                 
    
    

  
	<!-- ฟอร์มรายการค้นหา HN และรายการยาทั้งหมด -->
	<div style="margin:10px 0;"></div>
	<div class="easyui-tabs" style="width:800px;height:250px">
        <div title="Epilepsy Clinic Patient Profle Database (12-progress)" style="padding:10px">
	         <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-save'" >เพิ่มข้อมูล</a>
                 <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-edit'" >แก้ไขข้อมูล</a> 
                  
                           

                          
        <form id="ff" method="post">
            <table cellpadding="5">
                <tr>
                    <td>HN:</td>
                    <td><input id="HN_main" style="width:150px"></td>
                </tr>
                
                <tr>
                    <td>ชื่อ:</td>
                    <!--<td><input class="easyui-textbox" type="text" name="Name" id="Name" data-options="required:true"></input></td>-->
                     <td><input class="easyui-textbox" type="text" name="Name" id="Name"  data-options="iconCls:'icon-search'"  ></input></td>
                </tr>
                <tr>
                    <td>นามสกุล:</td>
                    <td><input class="easyui-textbox" type="text" name="Surname"  id="Surname"  data-options="iconCls:'icon-search'"  ></input></td>
                </tr>
                <tr>
                    <td>วัน-เดือน-ปี เกิด:</td>
                    <td><input class="easyui-textbox" type="text" name="BirthDate"  id="BirthDate"  data-options="iconCls:'icon-search'" ></input></td>
                </tr> 
                <tr>
                    <td>อายุ :</td>
                    <td><input class="easyui-numberspinner" type="text" name="age_main" id="age_main"  data-options="iconCls:'icon-search'"  ></td>
                </tr>
            </table>
        </form>
        </div>
        <!-- ฟอร์มรายการค้นหา HN และรายการยาทั้งหมด -->
        
    
         <div title="รายการยาทั้งหมด (05-treatment)" style="padding:10px">
         <ul class="easyui-tree" data-options="url:'',method:'get',animate:true"></ul>

         <a href="#" class="easyui-linkbutton" iconCls="icon-reload" onclick="insert_treatment()">Last Order</a>    
          <a href="#" class="easyui-linkbutton" iconCls="icon-print" onclick="call_drug1()">Medication Profile</a>


<div style="margin:10px 0;"></div>
<!-- โหลดรายการยาทั้งหมด -->
 <?php   $this->load->view("treatment/form_treatment"); // views/treatment/form_treatment ใช้โหลดรายการยาทั้งหมด 05_treatment    ?>   
<!-- โหลดรายการยาทั้งหมด -->
 
<!-- เพิ่มรายการยา -->
  <?php  $this->load->view("treatment/form_insert_treatment"); //โหลดฟอร์มบันทึกรายการยา ?>
<!-- เพิ่มรายการยา -->
             
           
         </div>
                
	</div>
<!-- ฟอร์มรายการค้นหา HN และรายการยาทั้งหมด -->

            


    <!-- Begin  From 1    -->
        <div style="margin:40px 0 10px 0;"></div>
    <div class="easyui-tabs" style="width:900px;height:250px">
        
           <div title="Appendix 1" style="padding:10px" data-options="iconCls:'icon-man' ">
                                      
               <?php   $this->load->view("appendix/main_app1"); ?>
                            
        </div>
        
        
        <div title="Epilepsy Clinic" style="padding:10px">
            
            <!--
            <p style="font-size:14px">jQuery EasyUI framework helps you build your web pages easily.</p>
            <ul>
                <li>easyui is a collection of user-interface plugin based on jQuery.</li>
                <li>easyui provides essential functionality for building modem, interactive, javascript applications.</li>
                <li>using easyui you don't need to write many javascript code, you usually defines user-interface by writing some HTML markup.</li>
                <li>complete framework for HTML5 web page.</li>
                <li>easyui save your time and scales while developing your products.</li>
                <li>easyui is very easy but powerful.</li>
            </ul>
            -->
            <?=$this->load->view("epilepsy/main_epilepsy")?>
            
        </div>
        <div title="EEG" style="padding:10px"  data-options="closable:false " >
            
            <!--
            <ul class="easyui-tree" data-options="url:'',method:'get',animate:true">
                 <li>easyui is very easy but powerful.</li>
            </ul>
            -->
            <?=$this->load->view("EEG/main_EEG")?>
            
        </div>
        <div title="Imaging" data-options="closable:false" style="padding:10px">
            <?=$this->load->view('imaging/main_imaging')?>
        </div>
        <div title="General" style="padding:10px">
             <?=$this->load->view('general/main_general')?> 
        </div>
        
        <div title="Blood" style="padding:10px">
            <?=$this->load->view("blood/main_blood")?> 
            <!--
            <ul class="easyui-tree" data-options="url:'',method:'get',animate:true">
                <li>easyui is very easy but powerful.</li>
            </ul>
            -->
            
        </div>
        
        <div title="Chem.1" style="padding:10px">
           <!-- 
            This is the help content.
            <ul class="easyui-tree" data-options="url:'',method:'get',animate:true">
                <li>easyui is very easy but powerful.</li>
            </ul>
           -->
            <?=$this->load->view("chem/main_chem1")?> 
        </div>
        
        <div title="Chem.2" style="padding:10px">
            
            <!-- 
             This is the help content.
            <ul class="easyui-tree" data-options="url:'',method:'get',animate:true"></ul>
            -->
            <?=$this->load->view("chem/main_chem2")?>  
            
        </div>
        
        <div title="Drug level" style="padding:10px">
            <!--
             This is the help content.
            <ul class="easyui-tree" data-options="url:'',method:'get',animate:true"></ul>
            -->
            <?=$this->load->view('tdm/main_tdm')?>
        </div>
        
        
    </div>
     <!-- End  From 1    -->
    
    
      <!-- Begin Form2  --> 
    <div style="margin:20px 0 10px 0;"></div>
    <div class="easyui-tabs" style="width:900px;height:250px">
        
     
        
        <div title="Non Compliance" style="padding:10px">
            
            <!--
            <p style="font-size:14px">jQuery EasyUI framework helps you build your web pages easily.</p>
            -->
           <!--
            <ul>
                <li>easyui is a collection of user-interface plugin based on jQuery.</li>
                <li>easyui provides essential functionality for building modem, interactive, javascript applications.</li>
                <li>using easyui you don't need to write many javascript code, you usually defines user-interface by writing some HTML markup.</li>
                <li>complete framework for HTML5 web page.</li>
                <li>easyui save your time and scales while developing your products.</li>
                <li>easyui is very easy but powerful.</li>
            </ul>
            -->
            
            <?=$this->load->view("noncomp/main_noncomp")?>
            
        </div>
        <div title="ARDs" style="padding:10px">
           
            <!--
            <ul class="easyui-tree" data-options="url:'',method:'get',animate:true">
                 <li>easyui is very easy but powerful.</li>
            </ul>
            -->
             <?=$this->load->view("adr/main_adr")?>
            
        </div>
        <div title="Medication error" data-options="iconCls:'icon-man',closable:false" style="padding:10px">
             <?=$this->load->view("medication/main_medication")?>
        </div>
        <div title="Other DRPs" style="padding:10px">
            
            <?=$this->load->view('otherdrp/main_otherdrp')?>
                        
        </div>
        
        <div title="Progress Note" style="padding:10px">
            <?php $this->load->view('progressnote/main_progressnote')?>
        </div>
        
        <div title="Give Information" style="padding:10px">
            <?php $this->load->view('give/main_give')?>
            
        </div>
        
        <div title="Epilepsy History" style="padding:10px">
            
            
        </div>
        
      
        
    </div>
     <!--  End Form2  -->

     

</div>
  <!-- End Frame--->            

            
            
  
                

              
                
                
            
            
              
              

    
    
        
   
    
       
    
    
    
        
 </div>
     
      
    
    </body>
    </html>
