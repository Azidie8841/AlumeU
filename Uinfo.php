<?php
include 'header.php'
?>

<!DOCTYPE html>
<!-- Designed by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive FAQ Accordion | CodingLab </title>-->
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
       /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;600&display=swap');

::selection{
  background: #7d2ae8;
  color: #fff;
}
.accordion{
  display: flex;
  max-width: 1010px;
  width: 100%;
  align-items: center;
  background: #fff;
  border-radius: 25px;
  padding: 45px 90px 45px 60px;
}
.accordion .image-box{
  height: 360px;
  width: 300px;
}
.accordion .image-box img{
  height: 100%;
  width: 100%;
  object-fit: contain;
}
.accordion .accordion-text{
  width: 60%;
}
.accordion .accordion-text .title{
  font-size: 35px;
  font-weight: 600;
  color: #7d2ae8;
  font-family: 'Fira Sans', sans-serif;
}
.accordion .accordion-text .faq-text{
  margin-top: 25px;
  height: 263px;
  overflow-y: auto;
}
.faq-text::-webkit-scrollbar{
  display: none;
}
.accordion .accordion-text li{
  list-style: none;
  cursor: pointer;
}
.accordion-text li .question-arrow{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.accordion-text li .question-arrow .question{
  font-size: 18px;
  font-weight: 500;
  color: #595959;
  transition: all 0.3s ease;
}
.accordion-text li .question-arrow .arrow{
  font-size: 20px;
  color: #595959;
  transition: all 0.3s ease;
}
.accordion-text li.showAnswer .question-arrow .arrow{
  transform: rotate(-180deg);
}
.accordion-text li:hover .question-arrow .question,
.accordion-text li:hover .question-arrow .arrow{
  color: #7d2ae8;
}
.accordion-text li.showAnswer .question-arrow .question,
.accordion-text li.showAnswer .question-arrow .arrow{
  color: #7d2ae8;
}
.accordion-text li .line{
  display: block;
  height: 2px;
  width: 100%;
  margin: 10px 0;
  background: rgba(0, 0, 0, 0.1);
}
.accordion-text li p{
  width: 92%;
  font-size: 15px;
  font-weight: 500;
  color: #595959;
  display: none;
}
.accordion-text li.showAnswer p{
  display: block;
}

@media (max-width: 994px) {
  body{
    padding: 40px 20px;
  }
  .accordion{
    max-width: 100%;
    padding: 45px 60px 45px 60px;
  }
  .accordion .image-box{
    height: 360px;
    width: 220px;
  }
  .accordion .accordion-text{
    width: 63%;
  }
}
@media (max-width: 820px) {
  .accordion{
    flex-direction: column;
  }
  .accordion .image-box{
    height: 360px;
    width: 300px;
    background: #7d2ae8;
    width: 100%;
    border-radius: 25px;
    padding: 30px;
  }
  .accordion .accordion-text{
    width: 100%;
    margin-top: 30px;
  }
}
@media (max-width: 538px) {
  .accordion{
    padding: 25px;
  }
  .accordion-text li p{
    width: 98%;
  }
}

.title{
  text-align: center;
  padding-bottom: 40px;
  font-weight: bold;
  font-size: 30px;
  color:#7d2ae8;
}

h1{
  text-align: center;
  padding-bottom: 40px;
  font-size: 20px;
}

       </style>
<div class="title">Faculty Information Management Universiti Teknologi MARA (UITM)</div>
<h1>Preserving the Past, Valuing the Present, Enriching the Future</h1>
<body>
  <div class="accordion">
    <div class="image-box">
      <img src="img/Faculty-of-Information-Management.png" alt="Faculty-of-Information-Management Image">
    </div>
    <div class="accordion-text">
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">About Us?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Faculty of Information Management, UiTM, takes pride in being the pioneer in providing professional education to fulfil the manpower need of the country in three very important fields, namely: Information Management, Library Management, and Records Management.</p>
        <span class="line"></span>
       </li>
      <li>
        <div class="question-arrow">
          <span class="question">Why need to hire our Alumni?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Our graduates become the main driving force for the development of a knowledge-based society, transforming Malaysia into a developed nation, ensuring that the country’s rich reservoirs of knowledge are systematically organised, maintained and enhanced for optimum value. To achieve this aim, the programmes consist of the blended components from four main areas: Information Technologies, Professional and Technical Aspects of Information and Records Management, Public Relations, and Users’ Needs and Services.</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>


  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>

</body>
</html>

<?php
include 'footer.php'
?>
