 document.addEventListener('DOMContentLoaded', function() {
      // Show content 1 by default
      document.getElementById('content1').classList.add('active');

      // Toggle switch change event listener
      document.getElementById('toggleSwitch').addEventListener('change', function() {
        var isChecked = this.checked;
        var content1 = document.getElementById('content1');
        var content2 = document.getElementById('content2');

        if (isChecked) {
          content1.classList.remove('active');
          content2.classList.add('active');
        } else {
          content1.classList.add('active');
          content2.classList.remove('active');
        }
      });
    });