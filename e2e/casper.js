casper.test.begin('First Test Running...', 3, function suite(test) {
    casper.start("http://127.0.0.1:8080/", function() {
        this.capture('image.png');
        test.assertExists("h1");
        test.assertSelectorHasText("h1", 'Title');
        test.assertVisible('div.description');
    });

    casper.run(function() {
        test.done();
    });
});
