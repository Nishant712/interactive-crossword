
// for(var i = 0; i < cells.length; i++) {
//     console.log(cells[i].value);
// }



$(document).ready(function(){
    var cells = sessionStorage.getItem("cells");
    var temp = cells.split(';');
    console.log(temp);     
    var inp_cells = document.querySelectorAll("#puzzle-wrapper #puzzle tbody tr td input");
    console.log(inp_cells);
    for(var i = 0;i < inp_cells.length; i++) {
        var inp = inp_cells[i].getAttribute("data-answer");
        var inp_arr = inp.split(':');
        var inp_ans = inp_arr[1];
        console.log(inp_ans);
        var ansArray = temp[i].split(':');
        inp_cells[i].value = ansArray[1];
        if(inp_cells[i].value == inp_ans) {
            inp_cells[i].style.color = "green";
        } else {
            inp_cells[i].style.color = "red";
        }
    }
    // $("button").click(function(){
    //     $("p").slideToggle();
    // });
});