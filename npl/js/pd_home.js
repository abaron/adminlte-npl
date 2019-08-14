var area = new Morris.Area({
    element   : 'revenue-chart-2',
    resize    : true,
    data      : [
      { y: '2018 W40', item1: 50, item2: 2 },
      { y: '2018 W45', item1: 30, item2: 1 },
      { y: '2018 W50', item1: 72, item2: 3 },
      { y: '2019 W1', item1: 89, item2: 3 },
      { y: '2019 W5', item1: 43, item2: 1 },
      { y: '2019 W10', item1: 38, item2: 4 },
      { y: '2019 W15', item1: 30, item2: 2 },
      { y: '2019 W20', item1: 50, item2: 3 },
      { y: '2019 W25', item1: 77, item2: 3 },
      { y: '2019 W30', item1: 99, item2: 2 }
    ],
    xkey      : 'y',
    ykeys     : ['item1', 'item2'],
    labels    : ['Finished', 'Dropped'],
    lineColors: ['#a0d0e0', '#f93636'],
    hideHover : 'auto'
  });