/**
 * 
 */
 function chkinput(form){
	 var cond=document.getElementsByName("zts[]")
	 for(var i=0;i<cond.length;i++){
		  if(cond[i].checked == true)  
		  {
			  return (true);
		  }
		  
	 }
		  alert('请选择处理状态!');
		  return false;
	
		
}