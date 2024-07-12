# app.py

from flask import Flask, jsonify

app = Flask(__name__)

phrases = [
    {"pa_o": "ခင်ႏလမ်းယိုနဝ်ꩻအဝ်ႏမုဲင်ꩻကို", "english": "Where is this place?"},
    {"pa_o": "မွူးရောဝ်ꩻခွေထာꩻမာꩻအဝ်ႏ", "english": "I have work tomorrow"},
    {"pa_o": "ခွိုင်ႏမုဲင်ꩻနားရီႏလဲဉ်း", "english": "What time is it?"},
    {"pa_o": "ထာꩻယိုအငိုꩻထဲ့ခွိုင်ႏမုဲင်ꩻ", "english": "How much does this cost?"},
    {"pa_o": "ခွေတကုဲင်တဝ်း", "english": "I am not angry"},
    {"pa_o": "ခွေအဝ်ႏလိုႏယိုခါနဝ်ꩻ", "english": "I want this now"},
    {"pa_o": "ပအိုဝ်ႏ", "english": "Pa'O"}
]

@app.route('/api/phrases', methods=['GET'])
def get_phrases():
    return jsonify(phrases)

if __name__ == '__main__':
    app.run(debug=True)
