const slideContainer = document.querySelector(".container");
const slide = document.querySelector(".slides");
const nextBtn = document.getElementById("next-btn");
const prevBtn = document.getElementById("prev-btn");
const interval = 1000;

let slides = document.querySelectorAll(".slide");
let index = 1;
let slideId;

// grab the first and the last eleme from the dom and enject the new element into the slider div
const firstClone = slides[0].cloneNode(true);
const lastClone = slides[slides.length - 1].cloneNode(true);
const secondClone = slides[1].cloneNode(true);
const thirdClone = slides[2].cloneNode(true);
const fourClone = slides[3].cloneNode(true);

slide.addEventListener("transitionend", () => {

    slides = getSlides();
    if (slides[index].id === firstClone.id) {
        slide.style.transition = "none";
        index = 1;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }

    if (slides[index].id === lastClone.id) {
        slide.style.transition = "none";
        index = slides.length - 2;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }
});

// set the id of the first and the last element
firstClone.id = "first-clone";
lastClone.id = "last-clone";

slide.append(firstClone);
slide.append(secondClone);
slide.append(thirdClone);
slide.append(fourClone);
slide.prepend(lastClone);

const slideWidth = slides[index].clientWidth;

slide.style.transform = `translateX(${-slideWidth * index}px)`;

const startSlide = () => {
    slideId = setInterval(() => {
        moveToNextSlide();
    }, interval);
};

const getSlides = () => document.querySelectorAll(".slide");

const moveToNextSlide = () => {
    slides = getSlides();
    if (index >= slides.length - 1) return;
    index++;
    slide.style.transition = ".4s ease-out";
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
};

const moveToPreviousSlide = () => {
    if (index <= 0) return;
    index--;
    slide.style.transition = ".4s ease-out";
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
};

// slideContainer.addEventListener("mouseenter", () => {
//     clearInterval(slideId);
// });

// slideContainer.addEventListener("mouseleave", startSlide);
nextBtn.addEventListener("click", moveToNextSlide);
prevBtn.addEventListener("click", moveToPreviousSlide);

startSlide();