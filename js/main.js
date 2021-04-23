/* All domElements */
const DomElements={
    mainNav:document.querySelector('.home-nav'),
    homeMain:document.querySelector('.home-main'),
    sectionHeadings:document.querySelectorAll('.head-text'),
    headDeco:document.querySelector('.head-deco'),
    article:document.querySelector('article')

}
const observer=new IntersectionObserver(styleHeaders,{threshold:1});

/* event listeners */
window.addEventListener('scroll',changeNavStyle);
/* for styling section headings when they become visible*/
DomElements.sectionHeadings.forEach(heading=>observer.observe(heading))





/* Event listener functions */
/* change the style of nav onscroll */
function changeNavStyle(){
    /* run when the offset top is less that -40 */
    if(DomElements.homeMain.getBoundingClientRect().top<-40){
        DomElements.mainNav.classList.add("darken")
    }else{
        DomElements.mainNav.classList.remove("darken")
    }
}
/* styles the section heading by underlying the section head item */
function styleHeaders(entries){
    let targetItem=entries[0];
    /* if target visible style the next sibling */
    if(targetItem.isIntersecting){
        const target=targetItem.target;
        const sibling=target.nextElementSibling;
        sibling.style.width=`${target.getBoundingClientRect().width}px`;
        sibling.style.padding="0.2rem";
        observer.unobserve(target)
    }
}