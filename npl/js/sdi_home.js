var area = new Morris.Area({
    element   : 'revenue-chart-2',
    resize    : true,
    data      : [
      { y: '2018 W40', item1: 50, item2: 20 },
      { y: '2018 W45', item1: 30, item2: 35 },
      { y: '2018 W50', item1: 72, item2: 45 },
      { y: '2019 W1', item1: 89, item2: 88 },
      { y: '2019 W5', item1: 43, item2: 49 },
      { y: '2019 W10', item1: 38, item2: 32 },
      { y: '2019 W15', item1: 30, item2: 25 },
      { y: '2019 W20', item1: 50, item2: 48 },
      { y: '2019 W25', item1: 77, item2: 64 },
      { y: '2019 W30', item1: 99, item2: 77 }
    ],
    xkey      : 'y',
    ykeys     : ['item1', 'item2'],
    labels    : ['Survey', 'Design'],
    lineColors: ['#a0d0e0', '#a93636'],
    hideHover : 'auto'
  });