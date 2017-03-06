function slideToggleProjects(projectsPreviewWrapper, projectIndex, index, bool) {
  var randomProjectIndex = makeUniqueRandom();
  
  if( index < numRandoms - 1 ) {
    projectsPreviewWrapper.eq(randomProjectIndex).toggleClass('slide-out', bool);
    setTimeout( function(){
      //animate next preview project
      slideToggleProjects(projectsPreviewWrapper, projectIndex, index + 1, bool);
    }, 150);
  } else {
    //this is the last project preview to be animated 
    projectsPreviewWrapper.eq(randomProjectIndex).toggleClass('slide-out', bool).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
      // ...
      animating = false;
    });
  }
}