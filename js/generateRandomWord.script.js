// Random Word Generator
function generateRandomWord() {
    const words = [
        "apple", "banana", "cherry", "date", "elderberry", "fig", "grape", "honeydew", "kiwi", "lemon", "mango", "nectarine", "orange", "papaya", "quince", "raspberry", "strawberry", "tangerine", "watermelon", "xigua", "yellow", "zucchini",
        "jazz", "quip", "fizz", "buzz", "fuzzy", "jinx", "jukebox", "jumble", "zigzag", "zephyr", "pixel", "waltz", "wizard", "kiosk", "oxygen", "vodka", "whisky", "jackpot", "jigsaw", "jockey", "quartz", "quiz", "squeeze", "zipper", "zodiac",
        "zygote", "yacht", "yak", "yolk", "yogurt", "yoga", "yawn", "yarn", "xylophone", "xebec", "x-ray", "xenon", "xerox", "xanadu", "wizardry", "wombat", "walrus", "waltz", "wave", "wavy", "wax", "waxy", "wisp", "wispy", "wrist", "writ",
        "write", "wrong", "wrote", "wrought", "yoga", "yogi", "yoke", "yolk", "yore", "young", "youth", "yowl", "yuan", "yucca", "yuck", "yucky", "yule", "yum", "yummy", "yup", "yuppy", "zag", "zap", "zeal", "zebra", "zen", "zero", "zest", "zig",
        "zinc", "zip", "zit", "zoo", "zoom", "zany", "zap", "zeal", "zebra", "zen", "zero", "zest", "zigzag", "zinc", "zip", "zipper", "zit", "zone", "zoo", "zoom", "boomerang", "blitz", "buzzword", "bikini", "blizzard", "blitz", "bungalow", "buzzard",
        "buzzing", "buzzwords", "caliph", "cobweb", "cockiness", "croquet", "crypt", "cycle", "daiquiri", "dirndl", "disavow", "duplex", "dwarves", "equip", "espionage", "exodus", "faking", "fishhook", "fixable", "fjord", "flapjack", "flopping", "fluffiness",
        "flyby", "foxglove", "frazzled", "frizzled", "gabby", "galaxy", "galvanize", "gazebo", "giaour", "gizmo", "glowworm", "glyph", "gnarly", "gnostic", "gossip", "grogginess", "haiku", "haphazard", "hyphen", "iatrogenic", "icebox", "injury", "ivory",
        "ivy", "jackpot", "jaundice", "jawbreaker", "jaywalk", "jazziest", "jazzy", "jelly", "jigsaw", "jinx", "jiujitsu", "jockey", "jogging", "joking", "jovial", "joyful", "juicy", "jukebox", "jumbo", "kayak", "kazoo", "keyhole", "khaki", "kilobyte",
        "kiosk", "kitsch", "kiwifruit", "klutz", "knapsack", "larynx", "lengths", "lucky", "luxury", "lymph", "marquis", "matrix", "megahertz", "microwave", "mnemonic", "mystify", "naphtha", "nightclub", "nowadays", "numbskull", "nymph", "onyx", "ovary",
        "oxidize", "oxygen", "pajama", "peekaboo", "phlegm", "pixel", "pizazz", "pneumonia", "polka", "pshaw", "psyche", "puppy", "puzzling", "quartz", "queue", "quips", "quixotic", "quiz", "quizzes", "quorum", "razzmatazz", "rhubarb", "rhythm", "rickshaw",
        "schnapps", "scratch", "shiv", "snazzy", "sphinx", "spritz", "squawk", "staff", "strength", "strengths", "stretch", "stronghold", "stymied", "subway", "swivel", "syndrome", "thriftless", "thumbscrew", "topaz", "transcript", "transgress", "transplant",
        "triphthong", "twelfth", "twelfths", "unknown", "unworthy", "unzip", "uptown", "vaporize", "vixen", "vodka", "voodoo", "vortex", "voyeurism", "walkway", "waltz", "wave", "wavy", "waxy", "wellspring", "wheezy", "whiskey", "whizzing", "whomever",
        "wimpy", "witchcraft", "wizard", "woozy", "wristwatch", "wyvern", "xylophone", "yachtsman", "yippee", "yoked", "youthful", "yummy", "zephyr", "zigzag", "zigzagging", "zilch", "zipper", "zodiac", "zombie"
    ];
    const randomIndex = Math.floor(Math.random() * words.length);
    document.getElementById('randomWordOutput').querySelector('span').textContent = words[randomIndex];
}