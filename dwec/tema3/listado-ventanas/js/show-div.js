{
  function show(stilo) {
    let x = document.getElementById(stilo);
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
  }
}