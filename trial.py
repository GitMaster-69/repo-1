import tkinter as tk
from time import strftime

def update_time():
    time = strftime('%H:%M:%S %p')
    clock_label.config(text=time, font=("Verdana", 50, "bold"), bg="blue", fg="white")
    clock_label.after(1000, update_time)

root = tk.Tk()
root.title("Attractive Digital Clock")
clock_label = tk.Label(root, font=("Verdana", 50, "bold"), bg="blue", fg="white")
clock_label.pack(fill=tk.BOTH, expand=True)
update_time()
root.mainloop()