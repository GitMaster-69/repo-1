import tkinter as tk
from time import strftime

def update_time():
    time = strftime('%H:%M:%S %p')
    clock_label.config(text=time)
    clock_label.after(1000, update_time)

root = tk.Tk()
root.title("Digital Clock")
clock_label = tk.Label(root, font=("Helvetica", 40), bg="black", fg="white")
clock_label.pack()
update_time()
root.mainloop()