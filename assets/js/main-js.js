jQuery( document ).ready(function() {
  
  jQuery("#products").circliful({
      animationStep: 2,
      animateInView: true,
      backgroundColor: 'none',
      foregroundBorderWidth: 2,
      foregroundColor: '#fff',
      backgroundBorderWidth: 2,
      backgroundColor: '#D28881',
      percent: 12,
      noPercentageSign: true,
      percentageY: 110,
      fontColor: '#D28881',
      textBelow: true,
      text: 'Products'
    });

  jQuery("#stylists").circliful({
      animationStep: 3,
      animateInView: true,
      backgroundColor: 'none',
      foregroundBorderWidth: 2,
      foregroundColor: '#fff',
      backgroundBorderWidth: 2,
      backgroundColor: '#D28881',
      percent: 20,
      noPercentageSign: true,
      percentageY: 110,
      fontColor: '#D28881',
      textBelow: true,
      text: 'Stylists'
    });

  jQuery("#locations").circliful({
      animationStep: 1,
      animateInView: true,
      backgroundColor: 'none',
      foregroundBorderWidth: 2,
      foregroundColor: '#fff',
      backgroundBorderWidth: 2,
      backgroundColor: '#D28881',
      percent: 10,
      noPercentageSign: true,
      percentageY: 110,
      fontColor: '#D28881',
      textBelow: true,
      text: 'Locations'
    });

  jQuery("#members").circliful({
      animationStep: 7,
      animateInView: true,
      backgroundColor: 'none',
      foregroundBorderWidth: 2,
      foregroundColor: '#fff',
      backgroundBorderWidth: 2,
      backgroundColor: '#D28881',
      percent: 92,
      noPercentageSign: true,
      percentageY: 110,
      fontColor: '#D28881',
      textBelow: true,
      text: 'Discount Club Members'
    });
});