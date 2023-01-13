
mybutton = document.getElementById("gotopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {

  document.documentElement.scrollTop = 0;
}


// -------
const questionDisplay = document.getElementsByClassName("questions")[0];
const answerDisplay = document.getElementsByClassName("answer")[0];

// console.log(answerDisplay);

const questions = [
    {
        id:0,
        text: "What kind of movie like ? ",
        answers : [
            {
                text:"Horror",
                image:"https://image.sciencenordic.com/1439248.jpg?imageId=1439248&panow=0&panoh=0&panox=0&panoy=0&heightw=0&heighth=0&heightx=0&heighty=0&width=200&height=200",
                alt:"photo of horror"     
            },
            {
                text:"Sci-Fiction",
                image:"https://assets.telegraphindia.com/telegraph/0b14c9c9-63b9-482a-a66d-c81be41ae79f.jpg",
                alt:"photo of ai"
            },
            {
                text:"Comedy",
                image:"https://www.themanual.com/wp-content/uploads/sites/9/2021/12/4ldpbxicygkkr8fghgjklphrfuc.jpg?p=1#038;p=1.jpg",
                alt:"photo of comedy"
            },
            {
                text:"Drama",
                image:"https://media.glamour.com/photos/5ec2e91dccfbc8c1a8fe8cbf/master/w_3000,h_2032,c_limit/MSDTITA_FE057.jpg",
                alt:"photo of drama movie"
            }
        ]
    },

    {
        id:1,
        text: "Who is your favorite Actor/Actress ?",
        answers: [
            {
                text:"Leonardo dicaprio",
                image:"https://upload.wikimedia.org/wikipedia/commons/2/25/Leonardo_DiCaprio_2014.jpg",
                alt:"Leonardo dicaprio"
            },

            {
                text:"Dwayne johnson",
                image:"https://upload.wikimedia.org/wikipedia/commons/f/f1/Dwayne_Johnson_2%2C_2013.jpg",
                alt:"Dwayne johnson"
            },

            {
                text:"Scarlett johansson",
                image:"https://www.cumhuriyet.com.tr/Archive/2021/8/23/1862749/kapak_120831.jpg",
                alt:"Scarlett johansson"
            },
            
            {
                text:"Jennifer lawrence",
                image:"https://m.media-amazon.com/images/M/MV5BOTU3NDE5MDQ4MV5BMl5BanBnXkFtZTgwMzE5ODQ3MDI@._V1_.jpg",
                alt:"Jennifer lawrence"
            }
        ]

    },

    {
        id:2,
        text: "From what year do you want movies released ? ",
        answers: [
            {
                text:"2015 - Now",
                image:"http://www.ulkumenrodoplu.com/wp-content/uploads/2017/03/2015-007.jpg",
                alt:""
            },

            {
                text:"2010 - Now",
                image:"https://thumbs.dreamstime.com/b/year-2010-10751806.jpg",
                alt:""
            },

            {
                text:"2000 - Now",
                image:"https://4.bp.blogspot.com/-KQJLLHQullg/WWwpyUbcIpI/AAAAAAAAMs8/aDL1Q1EVy5QU4s2sGMFfNOcorcuz0DkUACLcBGAs/s1600/2000.jpg",
                alt:""
            },

            {
                text:"Doesn't Matter",
                image:"https://i.ytimg.com/vi/c40lDlK-Gk8/maxresdefault.jpg",
                alt:""
            }
        ]
    }
]

const answers = [
    {
        combitantion: ["Horror","Leonardo dicaprio","2010 - Now",],
        text: "Shutter Island",
        image: "https://m.media-amazon.com/images/M/MV5BYzhiNDkyNzktNTZmYS00ZTBkLTk2MDAtM2U0YjU1MzgxZjgzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg",
        alt: "Shutter Island"
    },
    {
        combitantion: ["Horror","Jennifer lawrence","2010 - Now"],
        text: "House At The End Of The Street",
        image: "https://m.media-amazon.com/images/I/51Bmq-WdguL._AC_UF894,1000_QL80_.jpg",
        alt: "House At The End Of The Street"
    },
    {
        combitantion: ["Sci-Fiction","Dwayne johnson","2015 - Now"],
        text: "Jumanji Welcome to the Jungle",
        image: "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6169/6169135_so.jpg",
        alt: "Jumanji Welcome to the Jungle"
    },
    {
        combitantion: ["Drama","Leonardo dicaprio","2000 - Now"],
        text: "Titanic",
        image: "https://www.donanimhaber.com/images/images/haber/150070/src_340x191titanic-beyaz-perdeye-geri-donuyor.jpg",
        alt: "Titanic is a 1997 American epic, disaster, and romance-themed feature film directed, written, co-produced, and co-edited by James Cameron."
    }
]

const unansweredQuestions = [];
const choosedAnswers = [];

const populateQuestions = () => {
    questions.forEach(question => {
        const titleBlock = document.createElement('div');
        titleBlock.id = question.id;
        titleBlock.classList.add('title-block');

        const titleHeading = document.createElement('h2');
        titleHeading.textContent = question.text;
        titleBlock.append(titleHeading);
        questionDisplay.append(titleBlock);

        const questionsBlock = document.createElement('div');
        questionsBlock.id = question.id + "-questions";
        questionsBlock.classList.add('answer-options');

        unansweredQuestions.push(question.id);


        question.answers.forEach(answer => {
            const questionBlock = document.createElement('div');
            questionBlock.classList.add('answer-block');
            questionBlock.addEventListener('click', ()=>handleClick(question.id, answer.text));

            const questionImg = document.createElement('img');
            questionImg.setAttribute('src',answer.image);
            questionImg.setAttribute('alt',answer.alt);
            
            const questionTitle = document.createElement('h3');
            questionTitle.textContent = answer.text;

            questionBlock.append(questionImg, questionTitle);
            
            questionsBlock.append(questionBlock);
        })
        questionDisplay.append(questionsBlock);
        
    })
}
populateQuestions();

const handleClick = (questionId, choosedAnswer)=>{
    // console.log(questionId, choosedAnswer);
    if(unansweredQuestions.includes(questionId))
    choosedAnswers.push(choosedAnswer);
    const itemToRemove = unansweredQuestions.indexOf(questionId);

    if(itemToRemove > -1){
        unansweredQuestions.splice(itemToRemove,1);
    }
    console.log(choosedAnswers);
    console.log(unansweredQuestions);

    disableQuestionBlock(questionId, choosedAnswer);
    const lowestQuestionId = Math.min(...unansweredQuestions);
    // location.href = '#' + lowestQuestionId;
    
    // lowestQuestionId.scrollIntoView({behavior : 'smooth'});

    if(!unansweredQuestions.length){
        // scroll to answer div
        location.href = '#answer';
        showAnswer();
    }

}

const showAnswer = ()=>{
    let result 
    answers.forEach(answer =>{
        if(
            choosedAnswers.includes(answer.combitantion[0])+
            choosedAnswers.includes(answer.combitantion[1])+
            choosedAnswers.includes(answer.combitantion[2])+
            choosedAnswers.includes(answer.combitantion[3])+
            choosedAnswers.includes(answer.combitantion[4])         
                       
            

        )
        {
            
            result = answer;
            
        } else if(!result)
        {
            //first answer object is default
            result = answer[0];
        }

    })
    // console.log(result);


    const answerBlock = document.createElement('div');
    answerBlock.classList.add('result-block');
    
    const answerTitle = document.createElement('h3');
    answerTitle.textContent = "You should watch tonight this --> "+ result.text ;
    
    const answerImage = document.createElement('img');
    answerImage.setAttribute('src', result.image);
    answerImage.setAttribute('alt', result.alt);

    const answerOverview = document.createElement('div');
    answerOverview.classList.add('overview');
    answerOverview.textContent = "Overview: " + result.alt;
    
    //here

    answerBlock.append(answerTitle, answerImage, answerOverview);

    answerDisplay.append(answerBlock);

    const allAnswerBlock = document.querySelectorAll('.answer-block');
    Array.from(allAnswerBlock).forEach(answerBlock => answerBlock.replaceWith(answerBlock.cloneNode(true)));

}

const disableQuestionBlock = (questionId, choosedAnswer)=>{
    const currentQuestionBlock = document.getElementById(questionId + "-questions");

    Array.from(currentQuestionBlock.children).forEach(block =>{
        
        if(block.children.item(1).innerText !== choosedAnswer){
            block.style.opacity = "50%";
        }
    })


}