CREATE TABLE quotes
(
author		varchar(700),
quotes		varchar(700),
category	varchar(700),
image		varbinary(8000),


PRIMARY KEY (quotes)
);

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Albert Einstein', '“There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle.”', 'Life', LOAD_FILE('images/Life/img1.jpg') );


INSERT INTO quotes (author, quotes, category, image)
VALUES ('Albert Eisnstein', '“Life is like riding a bicycle. To keep your balance, you must keep moving.” ', 'Life', LOAD_FILE('images/Life/img2'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Buddha', '“Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.” ', 'Life', LOAD_FILE('images/Life/img3'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Confucius', '“Life is really simple, but we insist on making it complicated.” ', 'Life', LOAD_FILE('images/Life/img4'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Douglas Adams', '"I may not have gone where I intended to go, but I think I have ended up where I needed to be.”', 'Life', LOAD_FILE('images/Life/img5'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('E. M. Forster', '"We must be willing to let go of the life we have planned, so as to have the life that is waiting for us.”', 'Life', LOAD_FILE('images/Life/img6'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Irwin Corey', '“If we don\'t change direction soon, we\'ll end up where we\'re going.” ', 'Life', LOAD_FILE('images/Life/img7'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('John Green', '“Some infinities are bigger than other infinities.” ', 'Life', LOAD_FILE('images/Life/img8'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Mae West', '“You only live once, but if you do it right, once is enough.” ', 'Life', LOAD_FILE('images/Life/img9'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Olivia Newton-John', '“I live every day to its fullest extent and I don\'t sweat the small stuff.” ', 'Life', LOAD_FILE('images/Life/img10'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Queen Latifah', '“A confident woman is a sexy woman, in my opinion. And I think guys find that to be the same way.” ', 'Life', LOAD_FILE('images/Laughter/img1'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Ralph Waldo Emerson', '“Life is a progress, and not a station.” ', 'Life', LOAD_FILE('images/Laughter/img2'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Sydney J. Harris', '“When I hear somebody sigh, \'Life is hard,\' I am always tempted to ask, \'Compared to what?\'” ', 'Life', LOAD_FILE('images/Laughter/img3'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Kurt Vonnegut', '“Laughter and tears are both responses to frustration and exhaustion. I myself prefer to laugh, since there is less cleaning up to do afterward.” ', 'Laughter', LOAD_FILE('images/Laughter/img4'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Charlie Chaplin', '“A day without laughter is a day wasted.” ', 'Laughter', LOAD_FILE('images/Laughter/img5'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Fyodor Dostoyevsky', '“If you wish to glimpse inside a human soul and get to know a man, don\'t bother analyzing his ways of being silent, of talking, of weeping, of seeing how much he is moved by noble ideas; you will get better results if you just watch him laugh. If he laughs well, he\'s a good man.” ', 'Laughter', LOAD_FILE('images/Laughter/img6'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Norman Cousins', '“Hearty laughter is a good way to jog internally without having to go outdoors.” ', 'Laughter', LOAD_FILE('images/Laughter/img7'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Victor Borge', '“Laughter is the shortest distance between two people.” ', 'Laughter', LOAD_FILE('images/Laughter/img8'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Yakov Smirnoff', '“I believe that laughter is a language of God and that we can all live happily ever laughter.” ', 'Laughter', LOAD_FILE('images/Laughter/img9'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Victor Borge', '“If I have caused just one person to wipe away a tear of laughter, that\'s my reward.” ', 'Laughter', LOAD_FILE('images/Laughter/img10'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Erich Fromm', '“Immature love says: \'I love you because I need you.\' Mature love says \'I need you because I love you.\'” ', 'Love', LOAD_FILE('images/Love/img1'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Gilbert K. Chesterton', '“The way to love anything is to realize that it may be lost.” ', 'Love', LOAD_FILE('images/Love/img2'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Harry Emerson Fosdick', '“Bitterness imprisons life; love releases it.” ', 'Love', LOAD_FILE('images/Love/img3'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Jean de la Bruyere', '“The sweetest of all sounds is that of the voice of the woman we love.” ', 'Love', LOAD_FILE('images/Love/img4'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Lao Tzu', '“Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.” ', 'Love', LOAD_FILE('images/Love/img5'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Marcel Proust', '“Love is space and time measured by the heart.” ', 'Love', LOAD_FILE('images/Love/img6'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Pedro Calderon de la Barca', '“When love is not madness, it is not love.” ', 'Love', LOAD_FILE('images/Love/img7'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Tom Robbins', '“The highest function of love is that it makes the loved one a unique and irreplacable being.” ', 'Love', LOAD_FILE('images/Love/img8'));

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Werner Erhard', '“You don\'t have to go looking for love when it\'s where you come from.” ', 'Love', LOAD_FILE('images/Love/img9'));