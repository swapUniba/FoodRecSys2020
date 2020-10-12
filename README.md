# FoodRecSys
Food Recommender System based on Holistic User Model

Il sistema di raccomandazione suggerisce ricette personalizzate in ottica Health-Aware rispetto le caratteristiche dell'utente.

Ogni ricetta ha uno score popolare iniziale che varia in base ad una serie di regole:

Regola A: se l'utente è in sovrappeso (in base al BMI) → suggerire ricette con poche calorie, pochi grassi, più carboidrati e più fibre

Regola B: se l'utente è in sottopeso (in base al BMI) → suggerire ricette con più calorie, più carboidrati e più proteine

Regola C: se un utente è di cattivo umore → suggerisci una ricetta più dolce.

Regola D: se un utente fa attività fisica → suggerire ricette con più calorie, più proteine e più carboidrati 

Regola E: se l'utente è stressato → suggerisci ricette meno salate, meno ricette col caffè e ricette con cibi “antistress” (come latte, riso, fagioli, pollo, manzo, salmone, …)

Regola F: se l'utente è depresso → suggerire ricette a basso contenuto di grassi saturi, ricette con più carboidrati e fibre, con magnesio e con caffè

Regola G: se è ora di andare a letto → suggerisci meno ricette con il caffè 

Regola H: se l'utente non ha dormito abbastanza → suggerisci più ricette con magnesio, meno ricette col caffè e meno ricette con cibi grassi

Regola I: data l'esperienza in cucina dell'utente, ricalcolare lo score di una ricetta in base alla sua capacità

Regola J: se l'utente ha l'obiettivo di prendere peso e non è sovrappeso→ suggerire ricette con più calorie, più carboidrati e più proteine

Regola K: se l'utente ha l'obiettivo di perdere peso e non è sottopeso→ suggerire ricette con poche calorie, pochi grassi e più carboidrati

Regola L: dato il range di costo per una ricetta specificato dall'utente, ricalcolare lo score di una ricetta

Regola M: dato il tempo massimo per preparare una ricetta specificato dall'utente, ricalcolare lo score di una ricetta

Regola N: se l’utente ha un’età < 20 anni → suggerire ricette con più carboidrati, più fibre e meno grassi saturi

Regola O: se l’utente ha un’età >= 20 e < 30 anni → suggerire ricette con più proteine, più carboidrati e più fibre

Regola P: se l’utente ha un’età >= 30 e < 40 anni → suggerire ricette con più proteine e meno grassi

Regola Q: se l’utente ha un’età >= 40 e < 60 anni → suggerire ricette con più fibre e meno grassi

Regola R: se l’utente ha un’età > 60 anni → suggerire ricette con più proteine e meno calorie 


FOOD RECOMMENDER
Nella cartella foodwebapp è presente lo script per avviare il foodrecommender (start_server.sh).
Il foodrecommender è scritto in Python e necessita di Pandas e Flask.

WEBAPP
La webapp si trova nella cartella foodrecsys.
