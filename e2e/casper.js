casper.test.begin('First Test Running...', 3, function suite(test) {
    casper.start("http://localhost:8080/", function() {
        test.assertExists("h1");
        test.assertSelectorHasText("h1", 'Title');
        test.assertVisible('div.description');
    });

    casper.run(function() {
        test.done();
    });
});
