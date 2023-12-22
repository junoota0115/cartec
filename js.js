let tuikaTimes = 0;

let namae = document.getElementById('namae');

let nickname = document.getElementById('nickname');

let tuikahyouji = document.getElementById('tuikaBtn');

let result = document.getElementById('result');



tuikaBtn.addEventListener('click',function () {



if( namae.value ==="" || nickname.value ==="") {

return;

}

if(!window.confirm('「 '+ '[' + namae.value + ']' + 'さん' + '[' + nickname.value + ']' + 'を登録します。よろしいですか？」')) {

return;

}



register(namae.value,nickname.value);

tuikaTimes ++;

if( tuikaTimes >=3 ){

tuikahyouji.style.visibility = 'hidden';

}

});



function register(namaev,nicknamev){

let retbl=document.getElementById('result-table');



const retr=[namaev,nicknamev].reduce((a,b)=>(a.appendChild( Object.assign( document.createElement('td'),{textContent:b})),a),document.createElement('tr'));

retbl.appendChild(retr);

namae.value='';

nickname.value='';

retr.appendChild(Object.assign( document.createElement('input'),{type:'button',value:'削除',className:'del'}));

alert('「'+'[' + namaev +']' + 'さん' + '[' + nicknamev + ']' + 'にて登録しました。」');

}



document.addEventListener('click',e=>{

if(e.target.matches('.del')){

tuikaTimes--; tuikahyouji.style.visibility="visible";

e.target.closest('tr').remove();

}

});