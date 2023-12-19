<html>
    <head>
<script>
//var
function bnk48() {
    var orn = "Orn BNK48";
    var member = ['Noey','Wee','Font']
    console.log(bnk48);  // Function : bnk48
    console.log(orn); // Orn BNK48 จะเข้าถึงใน Function ได้  // Orn BNK48
    console.log(member); // ['Noey','Wee','Font']
    
}
//console.log(member); //is not defined
//ReferenceError เพราะ member ไม่สามารถเข้าถึงได้จากภายนอก function 
// bnk48();

function bnk48_2(){
    var orn = 'Orn';
    if(false){
        var orn = 'Boss'
        console.log(orn);
    }
    alert(orn);
}
// bnk48_2();
//let
function lo(){
    let member = "Orn"; //กำหนดค่า member = orn 
    member = "mobile"; // let สามารถแทนค่าได้
    alert(member);//ค่าใหม่ที่ออก จากการ ใช้ let คือ mobile
}
// lo();
//const
function love(){
    const x = 5; //กำหนดค่า x = 5 
    let y = 6; // แทนที่ค่า x = 6 ไม่สามารถ แทนที่ค่า x ได้ และไม่สามารถใช้ชื่อตัวแปร ซ้ำกันได้
    y = 12;
    alert(x+y);
}
// love();

</script> 
</head>
<body>
    </body>   
</html>