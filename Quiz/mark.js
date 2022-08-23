var selectedAnswer=[];
var correctAnswer=[]
function mark(){
	 correctAnswer[1]="Gandhiji"
	 correctAnswer[2]="2006"
	 correctAnswer[3]="Saaty"
	 correctAnswer[4]="Create,Read,Update,Delete"
	 correctAnswer[5]="1-9"
	 correctAnswer[6]="db.food.drop()"
	 correctAnswer[7]="np.bitwise_and()"
	 correctAnswer[8]="Activity diagram"
	 correctAnswer[9]="All of these"
	 correctAnswer[10]="True"
	 correctAnswer[11]="Profit"
	 correctAnswer[12]="4 8 16 32 64"
	 correctAnswer[13]="It has some intendation like a shape of snake"
	 correctAnswer[14]="Rani Lakshmi Bhai" 
	 correctAnswer[15]="10"
	 correctAnswer[16]="10"
	 correctAnswer[17]="Bhagat singh"
	 correctAnswer[18]="Dr.B.R.Ambedkar"
	 correctAnswer[19]="Pratibha Patil"
	 correctAnswer[20]="Jawaharlal Nehru"
	 correctAnswer[21]="Tantia Tope"
	 
	
	selectedAnswer[1]=document.querySelector('input[name="q1"]:checked')
	selectedAnswer[2]=document.querySelector('input[name="q2"]:checked')
	selectedAnswer[3]=document.querySelector('input[name="q3"]:checked')
	selectedAnswer[4]=document.querySelector('input[name="q4"]:checked')
	selectedAnswer[5]=document.querySelector('input[name="q5"]:checked')
	selectedAnswer[6]=document.querySelector('input[name="q6"]:checked')
	selectedAnswer[7]=document.querySelector('input[name="q7"]:checked')
	selectedAnswer[8]=document.querySelector('input[name="q8"]:checked')
	selectedAnswer[9]=document.querySelector('input[name="q9"]:checked')
	selectedAnswer[10]=document.querySelector('input[name="q10"]:checked')
	selectedAnswer[11]=document.querySelector('input[name="q11"]:checked')
	selectedAnswer[12]=document.querySelector('input[name="q12"]:checked')
	selectedAnswer[13]=document.querySelector('input[name="q13"]:checked')
	selectedAnswer[14]=document.querySelector('input[name="q14"]:checked')
	selectedAnswer[15]=document.querySelector('input[name="q15"]:checked')
	
	selectedAnswer[16]=document.getElementById('aid161')
	selectedAnswer[17]=document.getElementById('aid171')
	selectedAnswer[18]=document.getElementById('aid181')
	selectedAnswer[19]=document.getElementById('aid191')
	selectedAnswer[20]=document.getElementById('aid201')
	selectedAnswer[21]=document.getElementById('aid211')
	
	
	var marks=0 
	var count=0
	for(let i=1;i<=15;i++){
		if(selectedAnswer[i]!=null){
			if(selectedAnswer[i].value==correctAnswer[i] || selectedAnswer[i].value.toUpperCase()==correctAnswer[i]){
				marks++;
			}
		
		}

		count++
	}
	
	/*if(count>=0){
	alert("VERIFIED SUCCESSFULLY YOU SCORED "+marks+" MARKS")*/

	return marks;

/*else{
		alert("Complete all the answers")
		//window.open("quizoutline.htm")
	}*/


}
