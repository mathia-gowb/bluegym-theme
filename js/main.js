/* All domElements */
const DomElements={
    animateElements:document.querySelectorAll(".headtext,.article-preview,.popular-program"),
    transitionElements:document.querySelectorAll(".transition"),
    homeImage:document.querySelectorAll(".welcome-image"),
    mainNav:document.querySelector('.home-nav'),
    homeMain:document.querySelector('.home-main'),
    sectionHeadings:document.querySelectorAll('.head-text'),
    headDeco:document.querySelector('.head-deco'),
    article:document.querySelector('article')
}
/* animation functions */
const transitionFunctions={
    /* change the style of nav onscroll */
    changeNavStyle(){
        /* run when the offset top is less that -40 */
        if(DomElements.homeMain.getBoundingClientRect().top<-40){
            DomElements.mainNav.classList.add("darken")
        }else{
            DomElements.mainNav.classList.remove("darken")
        }
    },
     /* animates the selected childrens by adding a class linked to animation in css */
    animateMain(items,type,interval){
        let i=0;       
        const timer=setInterval(function(){
            let item=items[i];
            item.classList.add(type);
            i++
            if(i===items.length){
                clearInterval(timer)
            }
        },interval) 
    },
            /* finds an item which is visible and style it accordingly*/
    styleHeaders(entries){
        let targetItem=entries[0];
        /* if target visible style the next sibling */
        if(targetItem.isIntersecting){
            const target=targetItem.target;
            const sibling=target.nextElementSibling;
            sibling.style.width=`${target.getBoundingClientRect().width}px`;
            sibling.style.padding="0.2rem";
            observer.unobserve(target)
        }
    },
    /* dec */
    executeAnimation(entries){
        const allTargets=[];
        entries.forEach(entry=>{
            if(entry.isIntersecting){
            const target=entry.target;
           allTargets.push(target)
           transitionFunctions.animateMain(allTargets,"popout",200);
           observerII.unobserve(target);
        }
        });
    }
}
const observer=new IntersectionObserver(transitionFunctions.styleHeaders,{threshold:1});
const observerII=new IntersectionObserver(transitionFunctions.executeAnimation,{threshold:0.5});
/* event listeners */
window.addEventListener('scroll',transitionFunctions.changeNavStyle);
/* for styling section headings when they become visible*/
DomElements.sectionHeadings.forEach(heading=>observer.observe(heading));
DomElements.animateElements.forEach(element=>observerII.observe(element))

/* call to the animate content function */
transitionFunctions.animateMain(DomElements.transitionElements,"slidein",100);
transitionFunctions.animateMain(DomElements.homeImage,"popout",800)