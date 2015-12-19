<!--  31-12-2558  -->


    <script type="text/javascript">
        
        
        
        function myformatter(date){
            var y = date.getFullYear();
            var m = date.getMonth()+1;
            var d = date.getDate();
     
          return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
          //return (d<10?('0'+d):d)+'-'+(m<10?('0'+m):m)+'-'+y;
        }
        function myparser(s){
            if (!s) return new Date();
            var ss = (s.split('-'));
            var y = parseInt(ss[0],10);
            var m = parseInt(ss[1],10);
            var d = parseInt(ss[2],10);
            if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
                 return new Date(y,m-1,d);
               //   return new Date(d,m-1,y);
            } else {
                return new Date();
            }
        }
        
        function submitForm()
        {
             $('#fr_report').form('submit',{
                 onSubmit:function(){
                      var  from_date=$('#from_date').datebox('getValue');
                     var   to_date=$('#to_date').datebox('getValue');

                    var begin_arr=from_date.split("/");  //12/17/2015->begin=01-12-2547
                    var  y= parseInt(begin_arr[2])+543;
                   var   begin=begin_arr[1] + "-" + begin_arr[0] + "-" + y;
                    
                   var  end_arr=to_date.split("/");
                    var   yy=parseInt(end_arr)+543;
                    var  end=end_arr[1] + "-" + end_arr[0] + "-" + yy;
               
               //  window.open("http://drugstore.kku.ac.th/report_pdf/appendix_report/query_report_esn_merge.php?begin=" +  begin   + "&end="  +  end    +      "&HN=undefined");
                                    
              /*        
                   if( $('#Demographic').attr('checked','cheked')    )  //Demographic :  1
                   {
                             alert('1');
                   }              
                    if(    $('#Drug').attr('checked','cheked')    )
                   {
                              alert('2');
                   }
                   if(    $('#Pharmacist').attr('checked','cheked')    )
                   {
                              alert('3');
                   } 
               */
              

                           
                           //  alert( Demographic);
                   
                   
                           var  checkreport=$('#checkreport').combobox('getValue');
                           //alert(checkreport);
                          if( checkreport == 1 )
                          {
                              //alert('1');
                              // window.open('../../../report_pdf/appendix_report/switch_report.php?begin=' + begin + '&end=' +  end +  '&HN='  +  HN + '&checkreport=' + checkreport_  ,'mywindow',''); //#query by merg table  
                          }
                          else if(   checkreport == 2  )
                          {
                               alert('2');
                           }
                           else if(   checkreport == 3  )
                          {
                               alert('3');
                           }
                           
                           
                       
                 }
             });
        }
        function cancleform()
        {
            $('#win_report').window('close');
        }
        
    </script>
    
    
<div id="win_report" class="easyui-window" title=" Report ESN System ( ออกผลรายงาน ) " 
     data-options="
                              iconCls:'icon-large-picture' ,
                              size:'large',
                              iconAlign:'top',
                              modal:true,closed:true,
                              minimizable:false,
                              maximizable:false,
                              shadow:true,
                              collapsible:false,
                              
                              " 
     style="width:600px;height: 210px">
    <form id="fr_report" method="post">
        <table cellpadding="5">
  
            <tr>
                <td>From Date :</td>
                <td>
                   <!-- <input class="easyui-datebox"  id="from_date"   required="required"  data-options="formatter:myformatter,parser:myparser"  > -->
                      <input class="easyui-datebox"  id="from_date"   required="required"   >
                    </input>
                    
                    
                </td>
                <td>
                    To :
                </td>
                <td>
                 <!--   <input class="easyui-datebox"  id="to_date"   required="required"   data-options="formatter:myformatter,parser:myparser" > -->
                     <input class="easyui-datebox"  id="to_date"   required="required"    >
                    </input>
                    
                    
                </td>
                
            </tr>
            
            <tr>
                <td></td>
                <td>
                    
                    <!--
                    <select class="easyui-combobox" name="state" style="width:200px;">
        <option value="1">Demographic</option>
        <option value="2">Drug Related Problem</option>
        <option value="3">Pharmacist Action</option>
                       </select>
                    -->
                    
                    <input class="easyui-combobox"  id="checkreport" data-options="
                           valueField:'label',
                           textField:'value',
                           data:[{
                             label:'1',value:'Demographic'
                           }
                           ,{  label:'2',value:'Drug' }
                           ,{  label:'3',value:'Pharmacist' }
                           ]
                           ">
                    
                    
                </td>
            </tr>
            
            
        <!--    
       <tr>
          
            <td>
                <input  type="radio"  id="Demographic" value="1" name="checkreport" />  
            </td>
            <td>Demographic </td>
        </tr>
              <tr>
           
            <td>
                <input  type="radio"  id="Drug" value="2" name="checkreport"> 
            </td>
            <td>Drug Related Problem </td>
        </tr>
        <tr>
       
            <td>
                <input  type="radio"  id="Pharmacist" value="3" name="checkreport"> 
            </td>
            <td>Pharmacist Action</td>
            
        </tr>
        -->
        
        
        <!--
        <tr>
            <td colspan="2">
                <a class="easyui-linkbutton" data-options="iconCls:'icon-ok'" href="javascript:void(0)" onclick="javascript:alert('ok')" style="width:80px">Search</a>
              
                 <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="javascript:alert('cancel')" style="width:80px">Close</a>
            </td>
        </tr>
        -->
        
        <tr>
            <td colspan="2" >
                <?=nbs(40)?>
                <a class="easyui-linkbutton" data-options="iconCls:'icon-search'" href="javascript:void(0)"  style="width:80px" onclick="submitForm()">Search</a>
                <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)"  style="width:80px" onclick="cancleform()">Close</a>
            </td>
        </tr>
            
        </table>
    </form>
    
</div>
