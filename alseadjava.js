let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});


const observer =new IntersectionObserver ((entries)=>{
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting){
      entry.target.classList.add('show');

    }
    else {
      entry.target.classList.remove('show');
    }
  });
});

const hiddenElements = document.querySelectorAll('.l1-1');
hiddenElements.forEach((el) => observer.observe(el));



const observer1 =new IntersectionObserver ((entries)=>{
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting){
      entry.target.classList.add('show1-1');

    }
    else {
      entry.target.classList.remove('show1-1');
    }
  });
});

const hiddenElements1 = document.querySelectorAll('.P1-1');
hiddenElements1.forEach((el) => observer1.observe(el));




const observer2 =new IntersectionObserver ((entries)=>{
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting){
      entry.target.classList.add('show1-2');

    }
    else {
      entry.target.classList.remove('show1-2');
    }
  });
});

const hiddenElements2 = document.querySelectorAll('.M1-1');
hiddenElements2.forEach((el) => observer2.observe(el));



const observer3 =new IntersectionObserver ((entries)=>{
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting){
      entry.target.classList.add('show1-3');

    }
    else {
      entry.target.classList.remove('show1-3');
    }
  });
});

const hiddenElements3 = document.querySelectorAll('.M1-2');
hiddenElements3.forEach((el) => observer3.observe(el));