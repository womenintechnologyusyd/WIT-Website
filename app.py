from flask import Flask, render_template, request, abort, url_for
from flask_socketio import SocketIO
import secrets


app = Flask(__name__)

# secret key used to sign the session cookie
app.config['SECRET_KEY'] = secrets.token_hex()
socketio = SocketIO(app)

# import socket_routes

# Home page
@app.route("/")
def index():
    return render_template("home.jinja")

# About Us page
@app.route("/aboutus")
def aboutus():
    return render_template("aboutus.jinja")

# Events page
@app.route("/events")
def events():
    return render_template("events.jinja")

# Sponsors page
@app.route("/sponsors")
def sponsors():
    return render_template("sponsors.jinja")

# Publications page
@app.route("/publications")
def publications():
    return render_template("publications.jinja")

# Contact Us page
@app.route("/contactus")
def contactus():
    return render_template("contactus.jinja")

# handler when a "404" error happens
@app.errorhandler(404)
def page_not_found(_):
    return render_template('404.jinja'), 404



if __name__ == '__main__':
    socketio.run(app)