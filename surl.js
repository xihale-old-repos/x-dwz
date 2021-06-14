function get(){
    var url = window.document.location.href.toString();
    var u = url.split("?");
    return u[1];
}
var url=get();
if(url!==undefined&&url!=="")
{
	$.get(location.origin+"/s.php",{"s":url},function(data){
		if(data!="error")
		{
			spop({
				template: '\u8df3\u8f6c\u6210\u529f',
				style: 'success',//[error] [warning]
			});
			window.location.href=data;
		}
		else{
			spop({
				template: '\u6b64\u77ed\u94fe\u63a5\u65e0\u6548!',
				style: 'error',
				autoclose:3000
			});
		}
	});
}