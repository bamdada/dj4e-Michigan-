<?php

$CRUD_FIELDS_LIST = <<< EOF
{
    "autos" : {
        "key": "autos",
        "key_singular": "auto",
        "article": "an",
        "lookup_plural": "makes",
        "lookup_singular": "make",
        "lookup_article": "a",
        "fields" : [
            { "name" : "mileage", "type" : "i" },
            { "name" : "comments", "type" : "s" }
        ]
    },
    "cats" : {
        "key": "cats",
        "key_singular": "cat",
        "article": "a",
        "lookup_plural": "breeds",
        "lookup_singular": "breed",
        "lookup_article": "a",
        "examples": "Tabby, Persian, Maine Coon, Siamese, Manx",
        "fields" : [
            { "name" : "weight", "type" : "i" },
            { "name" : "foods", "type" : "s" }
        ]
    },
    "stars" : {
        "key": "stars",
        "key_singular": "star",
        "article": "a",
        "lookup_plural": "types",
        "lookup_singular": "type",
        "lookup_article": "a",
        "examples": "Siruis, Riegel, Arcturus, Vega, Polaris",
        "fields" : [
            { "name" : "mass", "type" : "i" },
            { "name" : "distance", "type" : "i" }
        ]
    },
    "pets" : {
        "key": "pets",
        "key_singular": "pet",
        "article": "a",
        "lookup_plural": "types",
        "lookup_singular": "type",
        "lookup_article": "a",
        "examples": "Turtle, Rabbit, Cat, Bearded Lizard, Pig",
        "fields" : [
            { "name" : "age", "type" : "i" },
            { "name" : "cost", "type" : "i" },
            { "name" : "comments", "type" : "s" }
        ]
    },
    "wizards" : {
        "key": "wizards",
        "key_singular": "wizard",
        "article": "a",
        "lookup_plural": "houses",
        "lookup_singular": "house",
        "lookup_article": "a",
        "examples": "Dumbledore, V*******t, Skeeter, Krum, Grindelwald",
        "fields" : [
            { "name" : "power", "type" : "i" },
            { "name" : "spell", "type" : "s" }
        ]
    },
    "boats" : {
        "key": "boats",
        "key_singular": "boat",
        "article": "a",
        "lookup_plural": "types",
        "lookup_singular": "type",
        "lookup_article": "a",
        "examples": "Titanic, Mayflower, Santa Maria, Constitution, HMS Victory",
        "fields" : [
            { "name" : "length", "type" : "i" },
            { "name" : "knots", "type" : "i" }
        ]
    },
    "horses" : {
        "key": "horses",
        "key_singular": "horse",
        "article": "a",
        "lookup_plural": "breeds",
        "lookup_singular": "breed",
        "lookup_article": "a",
        "examples": "Black Beauty, Seabiscuit, Secretariat, Trigger, Mr. Ed",
        "fields" : [
            { "name" : "height", "type" : "i" },
            { "name" : "weight", "type" : "i" }
        ]
    },
    "shows" : {
        "key": "shows",
        "key_singular": "show",
        "article": "a",
        "lookup_plural": "genres",
        "lookup_singular": "genre",
        "lookup_article": "a",

        "examples": "Sound of Music, Wicked, Jersey Boys, The Moustrap, Chicago",
        "fields" : [
            { "name" : "minutes", "type" : "i" },
            { "name" : "summary", "type" : "s" }
        ]
    },
    "gadgets" : {
        "key": "gadgets",
        "key_singular": "gadget",
        "article": "a",
        "lookup_plural": "brands",
        "lookup_singular": "brand",
        "lookup_article": "a",
        "examples": "Coffee, Dog Polisher, Juicer, Coffee Maker",
        "fields" : [
            { "name" : "price", "type" : "i" },
            { "name" : "year", "type" : "i" },
            { "name" : "notes", "type" : "s" }
        ]
    },
    "movies" : {
        "key": "movies",
        "key_singular": "movie",
        "article": "a",
        "lookup_plural": "genres",
        "lookup_singular": "genre",
        "lookup_article": "a",

        "examples": "Chicago, All that Jazz, Sound of Music, Grease",
        "fields" : [
            { "name" : "minutes", "type" : "i" },
            { "name" : "summary", "type" : "s" }
        ]
    },
    "cities" : {
        "key": "cities",
        "key_singular": "city",
        "article": "a",
        "lookup_plural": "states",
        "lookup_singular": "state",
        "lookup_article": "a",
        "examples": "Ann Arbor, Atlanta, Chicago, Dallas, New York, Phoenix",
        "fields" : [
            { "name" : "population", "type" : "i" },
            { "name" : "slogan", "type" : "s" }
        ]
    }
}
EOF
;

require_once "99utils.php";
