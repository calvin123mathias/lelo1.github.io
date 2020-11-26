const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("a").innerHTML;
    optionsContainer.classList.remove("active");
  });
});




const selected1 = document.querySelector(".selected1");
const optionsContainer1 = document.querySelector(".options-container1");

const optionsList1 = document.querySelectorAll(".option1");

selected1.addEventListener("click", () => {
  optionsContainer1.classList.toggle("active");
});

optionsList1.forEach(o => {
  o.addEventListener("click", () => {
    selected1.innerHTML = o.querySelector("a").innerHTML;
    optionsContainer1.classList.remove("active");
  });
});


const selected2 = document.querySelector(".selected2");
const optionsContainer2 = document.querySelector(".options-container2");

const optionsList2 = document.querySelectorAll(".option2");

selected2.addEventListener("click", () => {
  optionsContainer2.classList.toggle("active");
});

optionsList2.forEach(o => {
  o.addEventListener("click", () => {
    selected2.innerHTML = o.querySelector("a").innerHTML;
    optionsContainer2.classList.remove("active");
  });
});


const selected3 = document.querySelector(".selected3");
const optionsContainer3 = document.querySelector(".options-container3");

const optionsList3 = document.querySelectorAll(".option3");

selected3.addEventListener("click", () => {
  optionsContainer3.classList.toggle("active");
});

optionsList3.forEach(o => {
  o.addEventListener("click", () => {
    selected3.innerHTML = o.querySelector("a").innerHTML;
    optionsContainer3.classList.remove("active");
  });
});




