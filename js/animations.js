const articleOne = document.getElementsByClassName('front-page-projects')[0]
const articleTwo = document.getElementsByClassName('front-page-projects')[1]
const articleThree = document.getElementsByClassName('front-page-projects')[2]

// OnScroll event handler
const tonScroll = () => {

  // Get scroll value
  const scroll = document.documentElement.scrollTop

  // If scroll value is more than 0 - add class
  if (scroll > 600) {
    articleTwo.classList.add("animate__fadeInRight");
    articleTwo.classList.add("animate__delay-0.5s");
    articleTwo.style.visibility = "visible";

  } 
  
  if (scroll > 800) {
    articleOne.classList.add("animate__fadeInLeft")
    articleOne.classList.add("animate__delay-0.8s");
    articleOne.style.visibility = "visible";
  } 
  
  if (scroll > 1100) {
    articleThree.classList.add("animate__fadeInRight")
    articleThree.classList.add("animate__delay-1.1s");
    articleThree.style.visibility = "visible";
  }
}

// Use the function
window.addEventListener('scroll', tonScroll)

