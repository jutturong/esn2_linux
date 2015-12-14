
    <script type="text/javascript">
                 function myformatter(date){
            var y = date.getFullYear()+543;
            var m = date.getMonth()+1;
            var d = date.getDate();
           // return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
           // return  (m<10?('0'+m):m)+'-'+(d<10?('0'+d):d) + '-' + y  ;
           return  m + '-' + d + '-' + y;
        }
    </script>
    
<div id="win_report" class="easyui-window" title="Report ESN System" 
     data-options="
                              iconCls:'icon-save' , 
                              modal:true,closed:true,
                              minimizable:false,
                              maximizable:false,
                              shadow:true,
                              collapsible:false,
                              
                              " 
     style="width:600px;height: 300px">
    <form id="fr_report" method="post">
        <table cellpadding="5">
  
            <tr>
                <td>From Date :</td>
                <td>
                    <input class="easyui-datebox"  id="from_date"
                           required
                           data-options="
                           validType:'md[\'10-11-2012\']' ,
                           " ></input>
                    
                    
                </td>
                <td>
                    To :
                </td>
                <td>
                    <input class="easyui-datebox"  id="to_date"
                           required
                           data-options="
                           validType:'md[\'10-11-2012\']' ,
                           " ></input>
                </td>
                
            </tr>
            
       <tr>
            <td>Demographic :</td>
            <td>
                <input  type="radio"  id="Demographic" value="1" name="checkreport" />
            </td>
        </tr>
              <tr>
            <td>Drug Related Problem :</td>
            <td>
                <input  type="radio"  id="Drug" value="2" name="checkreport">
            </td>
        </tr>
        <tr>
            <td>Pharmacist Action :</td>
            <td>
                <input  type="radio"  id="Pharmacist" value="3" name="checkreport">
            </td>
        </tr>
        
        <tr>
            <td >
                <a class="easyui-linkbutton" data-options="iconCls:'icon-ok'" href="javascript:void(0)" onclick="javascript:alert('ok')" style="width:80px">Ok</a>
              
            </td>
            <td>
                  <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="javascript:alert('cancel')" style="width:80px">Cancel</a>
            </td>
        </tr>
            
        </table>
    </form>
    
</div>
