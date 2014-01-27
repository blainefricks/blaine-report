function clickHandler(event) {
  var eType = event.type;
  /* the following is for compatibility */
  /* Moz populates the target property of the event object */
  /* IE populates the srcElement property */
  var eTarget = event.target || event.srcElement;

  alert( "Captured Event (type=" + eType + ", target=" + eTarget );
}