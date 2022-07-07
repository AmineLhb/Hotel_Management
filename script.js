window.addEventListener('scroll', () => {
    console.log('you are scrolling');
    const header=document.querySelector('header');
    if(window.scrollY>1){
        header.style.backgroundColor = "#262626";
    }else{
        header.style.backgroundColor = "rgba(27, 146, 211, 0)";
    }
  })