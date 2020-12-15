
function quantUpdate(price)
{
    
    var quantity = document.getElementById("quantity_01").value;
    
    var total = (quantity * price) * 1.0925;
    
    document.getElementById("total01").innerHTML = "$" + total;
    
    
    
    
}