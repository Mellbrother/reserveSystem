document.getElementById("p2").style.visibility ="hidden";















// window.onload = function(){
// const array = ["station"];
//     for(const i=0;i<array.length;i++){
//         cosnt id = array[i] + "_display";
//         const obj = array[i] + "_check";
//         const CELL = document.getElementById(id);
//         const TABLE = CELL.parentNode.parentNode.parentNode;
//         for(const j=0;TABLE.rows[j];j++) {
//             TABLE.rows[j].cells[CELL.cellIndex].style.display = (document.getElementById(obj).checked) ? '' : 'none';
//         }
//     }
// }
// function checkbox_cell( obj,id ){
//     var CELL = document.getElementById(id);
//     var TABLE = CELL.parentNode.parentNode.parentNode;
//     for(var i=0;TABLE.rows[i];i++) {
//         TABLE.rows[i].cells[CELL.cellIndex].style.display = (obj.checked) ? '' : 'none';
//     }
// }
//
//
//




//
// function test(i){
// 	console.log('editBtn内です');
//
// 	let text_form = document.getElementById('form' + i);
// 	let text_send = document.getElementById('send' + i);
// 	let edit_button = document.getElementById('editButton' + i);
//
// 	//document.getElementById("item").setAttribute("disabled", true);
//
// 	if(edit_button.classList.contains('flag')){
// 		edit_button.classList.remove('flag');
// 		text_form.type = 'hidden';
// 		text_send.type = 'hidden';
// 		edit_button.value="編集";
// 		console.log('down');
// 	}else{
// 		edit_button.setAttribute("class", "flag");
// 		text_form.type = 'text';
// 		text_send.type = 'submit';
// 		edit_button.value="戻る";
// 		console.log('up');
// 	}
// }
//
// function addText(str){
// 	let form = document.createElement("form");
// 	/*フォームの送信先を指定*/
// 	form.action = str;
// 	form.method = 'get'
// 	/*id=属性名 huga=属性の希望する新しい値*/
// 	form.setAttribute('id', 'huga' + i);
//
// 	let input = document.createElement("input");
// 	input.name = i;
//
// 	let submit = document.createElement("input");
// 	submit.type = "submit";
// 	submit.value = "変更";
//
// /*要素を追加*/
// 	form.appendChild(input);
// 	form.appendChild(submit);
//
// 	return form;
// }
