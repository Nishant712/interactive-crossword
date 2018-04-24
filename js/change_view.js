var cells;

function checkCrossword() {
    var cells = document.querySelectorAll("#puzzle tbody tr td input");
    var ans;
    var inpList = "";
    for(var i = 0; i < cells.length; i++) {
        
        ans = cells[i].getAttribute("data-answer");
        var temp = ans.split(':');
        ans = temp[0].toString() + ":" + cells[i].value;
        inpList = inpList + ";" + ans;
        // inpList.push(ans);
        // console.log(ans);
    }
    inpList = inpList.substr(1);
    console.log(inpList);
    sessionStorage.setItem("cells", inpList);
    window.location.href = "crossword_interactive.php";
    // for(var i = 0; i < cells.length; i++) {
        
    //     console.log(cells[i].value);
    // }
}