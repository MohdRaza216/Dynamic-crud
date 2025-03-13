document.addEventListener("DOMContentLoaded", function () {
  let sidebar = document.querySelector(".sidebar");
  let btn = document.querySelector(".hamburger");
  let rightSidebarToggle = document.getElementById("rightSliderToggle");
  let blockChain = document.getElementById("blockChain");
  let subMenu2 = document.querySelector(".sub-menu-2");
  let blockArrow = document.querySelector(".block-arrow");
  let closeBtn = document.querySelector(".close-btn");
  let forThePadding = document.querySelectorAll(".for-the-padding");
  let scrollbox = document.querySelector(".scrollbox");

  let sidebarRight = document.getElementById("sidebarRight");

  let hoverTimer; // Declare a variable for the hover timer

  const listItems = document.querySelectorAll(".sidebar .nav-list li");

  listItems.forEach((item) => {
    item.addEventListener("click", function () {
      // Remove "IsNotDull" class from all items
      listItems.forEach((innerItem) => {
        innerItem.classList.remove("IsNotDull");
      });

      // Add "IsNotDull" class to the clicked item
      this.classList.add("IsNotDull");
    });
  });

  //////////////// right sidebar js ///////////////////////////////////////////////

  rightSidebarToggle.addEventListener("mouseover", () => {
    // Set a timer to wait for 2 seconds before showing the sidebar
    hoverTimer = setTimeout(() => {
      sidebarRight.style.right = "0vw";
    }, 2000); // 2000 milliseconds = 2 seconds
  });

  rightSidebarToggle.addEventListener("mouseout", () => {
    // If the mouse leaves the button before 2 seconds, cancel the timer
    clearTimeout(hoverTimer);
  });

  // Listen for keydown event on the entire document
  document.addEventListener("keydown", function (event) {
    // Check if the Escape key was pressed
    if (event.key === "Escape") {
      // Check if sidebar is open by checking its style or class
      if (
        sidebarRight.style.right === "0vw" ||
        sidebar.classList.contains("open")
      ) {
        // Adjust logic depending on how you're showing/hiding the sidebar
        sidebarRight.style.right = "-100vw"; // close the sidebar
        sidebar.classList.remove("open"); // or however you close it
      }
    }
  });

  closeBtn.addEventListener("click", () => {
    console.log("clicked close");
    sidebarRight.style.right = "-100vw";
  });

  // Listen for a click anywhere in the document
  document.addEventListener("click", function (event) {
    // Check if the click is outside the right sidebar
    if (
      !sidebarRight.contains(event.target) &&
      !rightSidebarToggle.contains(event.target)
    ) {
      // If sidebar is currently shown, hide it
      if (sidebarRight.style.right === "0vw") {
        sidebarRight.style.right = "-100vw"; // Adjust '-20vw' as per your sidebar's actual width
      }
    }
  });

  //////////////// right sidebar js ///////////////////////////////////////////////

  // //////////////////notification ////////////////////////////
  // Select all notification category elements
  const notificationCategories = document.querySelectorAll(
    ".notification-top .flex-row p"
  );

  notificationCategories.forEach((category) => {
    category.addEventListener("click", function () {
      // Remove 'noti-active-true' from all categories
      notificationCategories.forEach((cat) => {
        cat.classList.remove("noti-active-true");
        cat.classList.add("noti-active-false"); // if you want to explicitly use a false class
      });

      // Add 'noti-active-true' to the clicked category
      this.classList.add("noti-active-true");
      this.classList.remove("noti-active-false"); // if you're using a false class
    });
  });

  // //////////////////notification ////////////////////////////

  blockChain.addEventListener("click", () => {
    // console.log("clicked");
    blockArrow.classList.toggle("rotate-icon");
  });

  btn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    scrollbox.classList.toggle("overflow-y-scroll");
    subMenu2.classList.remove("show");
    subMenu2.classList.remove("d-block");

    blockChain.addEventListener("click", () => {
      subMenu2.classList.toggle("show");
      subMenu2.classList.toggle("d-block");
    });
    // console.log("okbos");

    // console.log(forThePadding);

    //    // Assuming forThePadding is a NodeList of elements you want to toggle the class for
    // forThePadding.forEach(element => {
    //   element.classList.toggle("inside-padding");
    //   console.log(element.classList);
    // });
  });

  const itemOfMenu = document.querySelector(".menu-item");

  itemOfMenu.addEventListener("mouseover", () => {
    if (sidebar.classList.contains("close")) {
      // console.log("fasdgfjakdskhdj");
      const testSubMenu = document.querySelector(".hover-sub-menu");
      testSubMenu.style.display = "block";
    }
  });
  itemOfMenu.addEventListener("mouseout", () => {
    if (sidebar.classList.contains("close")) {
      // console.log("fasdgfjakdskhdj");
      const testSubMenu = document.querySelector(".hover-sub-menu");
      testSubMenu.style.display = "none";
    }
  });

  const itemOfMenuBlog = document.querySelector(".menu-item-blog");

  itemOfMenuBlog.addEventListener("mouseover", () => {
    if (sidebar.classList.contains("close")) {
      // console.log("fasdgfjakdskhdj");
      const testSubMenu = document.querySelector(".hover-sub-menu-blog");
      testSubMenu.style.display = "block";
    }
  });
  itemOfMenuBlog.addEventListener("mouseout", () => {
    if (sidebar.classList.contains("close")) {
      // console.log("fasdgfjakdskhdj");
      const testSubMenu = document.querySelector(".hover-sub-menu-blog");
      testSubMenu.style.display = "none";
    }
  });
  const itemOfMenuCompiler = document.querySelector(".menu-item-compiler");

  itemOfMenuCompiler.addEventListener("mouseover", () => {
    if (sidebar.classList.contains("close")) {
      // console.log("fasdgfjakdskhdj");
      const testSubMenu = document.querySelector(".hover-sub-menu-compiler");
      testSubMenu.style.display = "block";
    }
  });
  itemOfMenuCompiler.addEventListener("mouseout", () => {
    if (sidebar.classList.contains("close")) {
      // console.log("fasdgfjakdskhdj");
      const testSubMenu = document.querySelector(".hover-sub-menu-compiler");
      testSubMenu.style.display = "none";
    }
  });

  // This function is responsible for toggling submenus
  function toggleSubMenu(subMenu) {
    // If the submenu is already displayed, hide it
    if (subMenu.style.display === "block") {
      subMenu.style.display = "none";
    } else {
      // Otherwise, show it
      subMenu.style.display = "block";
    }
  }

  sidebar.addEventListener("click", function (event) {
    let target = event.target; // Clicked element
    let parentLi = target.closest("li"); // The LI element

    if (parentLi) {
      // Check if this LI element has a submenu
      let subMenu = parentLi.querySelector(".sub-menu");
      let isIconLink =
        target.matches(".icon-link") || target.closest(".icon-link");

      // If it has a submenu and the clicked target is the icon link or a child of it
      if (subMenu && isIconLink) {
        event.preventDefault(); // Prevent default link behavior
        toggleSubMenu(subMenu); // Toggle the submenu
        parentLi.classList.toggle("show"); // Toggle the 'show' class

        // Find the arrow icon and rotate it
        let arrowIcon = parentLi.querySelector(".arrow");
        if (arrowIcon) {
          arrowIcon.classList.toggle("rotate-icon");
        }
      }
    }
  });
});
