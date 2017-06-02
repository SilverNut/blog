function checkAll(){
             var s=document.getElementsByTagName('input');
            var div=document.getElementById("divcheck");
            var checkbox=div.getElementsByTagName("input");
            for(i=0;i<checkbox.length;i++){
                checkbox[i].checked=true;
            };
        }
         function otherCheck(){
             var s=document.getElementsByTagName('input');
            var div=document.getElementById("divcheck");
            var checkbox=div.getElementsByTagName("input");
            for(i=0;i<checkbox.length;i++){
                checkbox[i].checked=false;
            };
        }
         function uncheck(){
             var s=document.getElementsByTagName('input');
            var div=document.getElementById("divcheck");
            var checkbox=div.getElementsByTagName("input");
            for(i=0;i<checkbox.length;i++){
                if(checkbox[i].checked==true){
                    checkbox[i].checked=false;
                }
                else{
                    checkbox[i].checked=true
                }
            };
        }

        function batchDelSubmit(){
            if(window.confirm('确定要删除这些记录?')){
                document.myform.submit();
            };

           
        }
        function changeCursor(){
            //alert('确定要删除这些记录?');
            document.getElementById("batchDel").style.cursor='pointer';
           

        }