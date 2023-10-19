function vali(){

    var inindate = document.getElementById("chekin").value;
    var outoutdate = document.getElementById("chekout").value;

    if(document.myForm.name.value==""){
        alert("Please Provide Customer Name");
        document.myForm.name.focus();
        return false;
    }
    if(document.myForm.des.value==""){
        alert("Please Provide Description");
        document.myForm.des.focus();
        return false;
    }
    
    var inck = new Date (inindate);
    var outck = new Date (outoutdate);

    if(document.myForm.indate.value==""){
        alert("Please Select A Check in Date");
        document.myForm.indate.focus();
        return false;
    }
    if(document.myForm.outdate.value=="" && outck>inck){
        alert("Please Select Valid Check Out Date");
        document.myForm.outdate.focus();
        return false;
    }
    if(document.myForm.cost.value==""){
        alert("Please Provide the Cost");
        document.myForm.cost.focus();
        return false;
    }
}