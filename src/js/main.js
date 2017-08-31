var newsGrid = document.querySelector('.news-grid');

if (newsGrid) {
    imagesLoaded(newsGrid, function() {
        msnry = new Masonry(newsGrid, {
            itemSelector: '.news-item-col',
            percentagePosition: true,
            columnWidth: '.news-item-col',
            gutter: 10
        })
    })
}