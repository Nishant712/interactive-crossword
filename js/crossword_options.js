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

function resetCrossword() {
    var inp_cells = document.querySelectorAll("#puzzle-wrapper #puzzle tbody tr td input");
    for(var i = 0;i < inp_cells.length; i++) {
        inp_cells[i].value = "";
        inp_cells[i].style.color = "black";
    }
    var clues_ele = document.querySelectorAll("#puzzle-clues ol li.clue-done");
    for(var i = 0; i < clues_ele.length; i++) {
	    clues_ele[i].classList.remove("clue-done");
	}
	
	var solved1 = [];
	var valuer = (100 * solved1.length/18).toFixed(2);
	$('.progress-bar').css('width', valuer+'%').attr('aria-valuenow', valuer);
	$('div.progress-bar').text(valuer+'%');
}