document.addEventListener("DOMContentLoaded", function() {
    // Elements
    var notificationWrapper = document.getElementById('notificationWrapper');
    var dropdown = document.querySelector('.notification-dropdown');
    var categories = document.getElementById('notificationCategories').children;
    var allContent = document.getElementById('contentAll');
    var messagesContent = document.getElementById('contentMessages');
    var alertsContent = document.getElementById('contentAlerts');
  
    // Utility function to clear active states
    function clearActiveStates() {
      for (var i = 0; i < categories.length; i++) {
        categories[i].classList.remove('noti-active-true');
        categories[i].classList.add('noti-active-false');
      }
    }
  
    // Utility function to hide all content
    function hideAllContent() {
      allContent.style.display = 'none';
      messagesContent.style.display = 'none';
      alertsContent.style.display = 'none';
    }
  
    // Function to update active category and show corresponding content
    function updateActiveCategory(category) {
      clearActiveStates();
      hideAllContent();
  
      switch (category) {
        case 'all':
          allContent.style.display = 'block';
          break;
        case 'messages':
          messagesContent.style.display = 'block';
          break;
        case 'alerts':
          alertsContent.style.display = 'block';
          break;
      }
  
      var activeCategoryElement = document.querySelector('[data-category="' + category + '"]');
      activeCategoryElement.classList.remove('noti-active-false');
      activeCategoryElement.classList.add('noti-active-true');
    }
  
    // Click event for categories
    for (var i = 0; i < categories.length; i++) {
      categories[i].addEventListener('click', function(e) {
        var category = this.getAttribute('data-category');
        updateActiveCategory(category);
      });
    }
  
    // Click away listener to close dropdown
    document.addEventListener('click', function(e) {
  // Check if dropdown exists
  if (typeof dropdown !== 'undefined' && dropdown !== null) {
    // If dropdown exists, proceed with the rest of the code
    if (notificationWrapper.contains(e.target)) {
      dropdown.style.display = 'block';
    } else {
      dropdown.style.display = 'none';
    }
  }
});
  
    // Escape key to close dropdown
    document.addEventListener('keydown', function(e) {
      if (e.key === "Escape") {
        dropdown.style.display = 'none';
      }
    });
  
    // ... Include other event listeners and logic as needed ...
  });
  