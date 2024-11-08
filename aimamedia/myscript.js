
function clickme() {
    // document.getElementById("click").style.display = "block";
}
$(".one").on("click", function () {
    document.getElementById("click").style.display = 'none';
});

$("#postbtn").on("click", function(){
    var category=doucment.getElementByName("समाचार");
    console.log(category);
    for (let i = 0; i < category.length; i++) {
        console.log(category[i]);
        if(category[i].checked){
            category=category[i].value;
            doucment.getElementById("response").value=category;
            var categoryx=category[i];
            console.log(categoryx);
        }
    }
    headline();
    photo();
});
function headline(){
    var headline=document.getElementById("headline").value;
    console.log(headline);
    var message=document.getElementById("message").value;
    console.log(message);
}
function photo(){
    var photo=document.getElementById("photos").value;

   var photo = $("photos").val();
    console.log(photo);
    var namearray=photo.split('\\');
    var imagename=namearray[2];
    var ext= imagename.split(".");
    console.log(ext[1]);
}