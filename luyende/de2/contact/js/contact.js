
window.addEventListener('load',function(){
    
    document.querySelector('#form-contact').addEventListener('submit',function(){
        event.preventDefault();
        var obj_name = document.querySelector('#name');
        var name = obj_name.value;
        var obj_question = document.querySelector('#question');
        var question = obj_question.value;
        var error = '';
        if (name == ''){
            obj_name.focus();
            
            var error = 'Chưa nhập Họ tên';
        }else if (question == ''){
            obj_question.focus();
            var error = 'chưa nhập câu hỏi';
        } 
        if (error == ''){
            alert('Gửi câu hỏi thành công');
        }
        document.querySelector('#error').innerHTML = error;
    })
   
})
document.getElementById("clear").addEventListener("click", function() {
    document.getElementById("name").value = "";
    document.getElementById("question").value = "";
  });