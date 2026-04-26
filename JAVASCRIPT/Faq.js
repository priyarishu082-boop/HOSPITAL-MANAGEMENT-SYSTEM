let questions = document.querySelectorAll(".question");

questions.forEach(function(q){
    q.addEventListener("click", function(){
        let ans = this.nextElementSibling;

        if(ans.style.display === "block"){
            ans.style.display = "none";
        }else{
            ans.style.display = "block";
        }
    });
});