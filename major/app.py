from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('Pest_Management.html')

@app.route('/manage_pests', methods=['POST'])
def manage_pests():
    crop = request.form.get('crop')
    pest_type = request.form.get('pest_type')
    management_strategy = request.form.get('management_strategy')

    # Perform pest management actions here
    # For example, you could log the data to a database or perform calculations

    return 'Pest management request received for {} crop, {} pest type, using strategy {}'.format(crop, pest_type, management_strategy)

if __name__ == '__main__':
    app.run(debug=True)