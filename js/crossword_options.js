function showAnswer() {
    var inp_cells = document.querySelectorAll("#puzzle-wrapper #puzzle tbody tr td input");
    for(var i = 0;i < inp_cells.length; i++) {
        var inp = inp_cells[i].getAttribute("data-answer");
        var inp_arr = inp.split(':');
        var inp_ans = inp_arr[1];
        inp_cells[i].value = inp_ans;
        inp_cells[i].style.color = "green";
    }
}